<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brands;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\ProductVariant;
use App\Models\ProfileController;
use App\Models\Whishlist;
use DataTables;
use Image;
use File;
use DB;

class ProductController extends Controller
{
//product_variants.discount_price,
    public function index(Request $request)
    {
        $query = Product::select(DB::raw('products.*,
                categories.name as category_name,
                product_variants.id as variant_id,
                brands.name as brand_name,
                SUM(product_variants.stock) as total_stock,
                MIN(product_variants.price) as min_price,
                product_variants.price,
                MAX(product_variants.price) as max_price,
                MIN(product_variants.discount_price) as min_discount_price,
                product_variants.discount_price,
                MAX(product_variants.discount_price) as max_discount_price,
                product_medias.data_file,
                COUNT(products.id) total_variant'
            ))
            // ->where(DB::raw('product_variants.stock', '>', 0))
            ->leftJoin(DB::raw('categories'), 'categories.id', '=', 'products.category_id')
            ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')
            ->leftJoin(DB::raw('product_variants'), 'products.id', '=', 'product_variants.product_id')
            ->leftJoin(DB::raw('product_medias'), 'products.id', '=', 'product_medias.product_id')
            ->groupBy('products.id');

        // return $query->get();
        if($request->has("categories")){
            $query->whereIn("products.category_id",$request->categories);
        }
        if($request->has("brands")){
            $query->whereIn("products.brand_id",$request->brands);
        }
        if($request->has("min_price")){
            if($request->min_price != ""){
                $query->where("product_variants.price", ">=", $request->min_price);
            }
        }
        if($request->has("max_price")){
            if($request->max_price != ""){
                $query->where("product_variants.price", "<=", $request->max_price);
            }
        }
        if($request->has("order_data")){
            $order_data = $request->order_data;
            switch($order_data){
                case 1:
                    $query->orderBy("products.category_id","ASC");
                break;
                case 2:
                    $query->orderBy("products.name","ASC");
                break;
                case 3:
                    $query->orderBy("products.name","DESC");
                break;
                case 4:
                    $query->orderBy("min_price","ASC");
                break;
                case 5:
                    $query->orderBy("min_price","DESC");
                break;
                default:
                break;
            }
        }
        $products = $query->where('products.status', true)->paginate(9);
        // return $products;
        // $categories = Category::where('status', true)->get();
        $categories = Category::select(DB::raw('categories.*'))
                        ->leftJoin(DB::raw('products'), 'products.category_id', '=', 'categories.id')
                        ->whereNotNull('products.id')
                        ->where('categories.status', true)
                        ->groupBy('categories.id')
                        ->get();
        $brands = Brands::where('status', true)->get();

        if ($request->ajax()) {
            return view('frontpage.products.product_list', compact("products", "categories", "brands"))->render();
        }

        return view("frontpage.products.products",compact("products", "categories", "brands"));
    }

    public function getDetail(Request $request){
        $detail = Product::select(DB::raw('products.*, categories.name as category_name, brands.name as brand_name, SUM(product_variants.stock) as total_stock, MIN(product_variants.price) as min_price, product_variants.price, MAX(product_variants.price) as max_price, product_medias.data_file, COUNT(products.id) total_variant'))
        ->leftJoin(DB::raw('categories'), 'categories.id', '=', 'products.category_id')
        ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')->where(["id" => $request->ix])->with("images")->with("variants")->first();
        if (!$detail) {
            return abort(404);
        }
        return response()->json($detail);
    }

    public function getDetailVariant(Request $request){
        $detail = ProductVariant::select(DB::raw('product_variants.*'))
        ->where(["id" => $request->ix])->first();
        if (!$detail) {
            return abort(404);
        }
        return response()->json($detail);
    }

    public function detail(Request $request)
    {
        $detail = Product::select(DB::raw('products.*, categories.name as category_name, brands.name as brand_name, SUM(product_variants.stock) as total_stock'))
        ->leftJoin(DB::raw('categories'), 'categories.id', '=', 'products.category_id')
        ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')
        ->leftJoin(DB::raw('product_variants'), 'products.id', '=', 'product_variants.product_id')
        ->where(["products.id" => $request->slug])
        ->with("images")
        ->with("variants")->first();

        // return $detail->variants;
        if (!$detail || $detail->total_stock <= 0) {
            return abort(404);
        }

        $related_products = Product::select(DB::raw('products.*, categories.name as category_name, brands.name as brand_name, SUM(product_variants.stock) as total_stock, MIN(product_variants.price) as min_price, product_variants.price, MAX(product_variants.price) as max_price, product_medias.data_file, COUNT(products.id) total_variant, product_variants.id as variant_id'))
        ->leftJoin(DB::raw('categories'), 'categories.id', '=', 'products.category_id')
        ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')
        ->leftJoin(DB::raw('product_variants'), 'products.id', '=', 'product_variants.product_id')
        ->leftJoin(DB::raw('product_medias'), 'products.id', '=', 'product_medias.product_id')
        ->where("products.category_id",$detail->category_id)
        ->where("products.id", "!=",$detail->id)
        ->groupBy('products.id')->take(4)->get();

        $categories = Category::select(DB::raw('categories.*, parent_categories.name as parent_name'))
            ->leftJoin(DB::raw('categories as parent_categories'), 'parent_categories.id', '=', 'categories.parent')
            ->whereNull('categories.parent')
            ->with('childCategories')->get();

        return view("frontpage.products.product_detail",compact("detail", "related_products", "categories"));
    }

    public function addToWishList(Request $request) {
        // 'customer_id', 'product_id'
        $data = $request->except(['_token', '_method']);

        if (isset(auth()->user()->id)) {

            $check = Whishlist::where('customer_id', auth()->user()->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($check != "" || $check != null || !empty($check)) {
                $response = [ 'status' => true, 'data' => $data, 'insert' => false ];
                return $response;
            } else {
                $data['customer_id'] = auth()->user()->id;
                $whishlist = Whishlist::create($data, false);
                $wishlist_count = Whishlist::where('customer_id', auth()->user()->id)->count();
                $response = [ 'status' => true, 'data' => $whishlist, 'insert' => true, 'count' => $wishlist_count ];
                return $response;
            }

        } else {
            $response = [ 'status' => false, 'data' => $data ];
            return $response;
        }

    }

}
