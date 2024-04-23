<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerGroup;
use App\Models\Customers;
use App\Models\Category;
use App\Models\Product;
use App\Models\CustomerGroupCategories;
use DataTables;
use DB;

class CustomerGroupController extends Controller
{
    private static $module = "customer_groups";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
        return view('administrator.customer_group.index');
    }

    public function getData(Request $request)
    {
        if ($request->status != "") {
            $status = $request->status == "active" ? 1 : 0;
            $data = CustomerGroup::where("status", $status)->get();
        } else {
            $data = CustomerGroup::get();
        }

        return DataTables::of($data)->make(true);
    }

    public function add()
    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }
        return view('administrator.customer_group.add');
    }

    public function insert(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        $this->validate($request, [
            'name' => 'required',
        ]);

        if (!$request->has('status')) {
            $status = 0;
        } else {
            $status = 1;
        }

        $customer_group = CustomerGroup::create([
            'name' => $request->name,
            'status' => $status,
        ]);

        //Write log
        createLog(static::$module, __FUNCTION__, $customer_group->id);

        return redirect('/admin/customer_group')->with(['success' => 'Your data added successfully.']);
    }

    public function detail($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }
        $customer_group = CustomerGroup::find($id);
        $categories = Category::select(DB::raw('categories.*, parent_categories.name AS parent_name'))
            ->leftJoin(DB::raw('categories as parent_categories'), 'parent_categories.id', '=', 'categories.parent')
            ->join(DB::raw('products'), 'products.category_id', '=', 'categories.id')
            ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')
            ->groupBy('categories.id')
            ->whereNotNull('products.id')
            ->whereNotNull('brands.id')
            ->whereNull('categories.parent')
            ->with('childCategories')
            ->get();

        // echo "<pre>";
        // dd($categories);
        // echo "</pre>";
        // exit;

        $brands = Product::select(DB::raw('categories.id, brands.id AS brand_id, brands.name AS brand_name'))
            ->leftJoin(DB::raw('categories'), 'categories.id', '=', 'products.category_id')
            ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')
            ->groupBy('categories.id')
            ->groupBy('brands.id')
            ->get();

        $customer_group_categories = CustomerGroupCategories::where(["customer_group_id" => $id])->get()->toArray();

        // foreach ($categories as $category) {
        //     foreach ($category->childCategories as $childCategories) {
        //         echo $childCategories->name;
        //         echo '<br>';
        //         foreach ($childCategories->products as $product) {
        //             echo $childCategories->name;
        //             echo '<br>';
        //             echo json_encode($product);
        //             echo '<br>';
        //             echo '<hr>';
        //         }
        //         echo '<hr>';
        //     }
        // }
        // // return $categories;
        // die;

        return view('administrator.customer_group.detail', ['customer_group' => $customer_group, 'categories' => $categories, "customer_group_categories" => $customer_group_categories, "brands" => $brands]);
    }

    public function categories(Request $request)
    {
        $categories = CustomerGroupCategories::all();
        foreach ($categories as $category) {
            if (!$request->has("category-$category->id")) {
                if ($request->customer_group_id == $category->customer_group_id) {
                    $customer_group = CustomerGroupCategories::find($category->id);
                    $customer_group->delete();
                }
            }
        }

        $get_categories = Category::select(DB::raw('categories.*, parent_categories.name AS parent_name'))
            ->leftJoin(DB::raw('categories as parent_categories'), 'parent_categories.id', '=', 'categories.parent')
            ->leftJoin(DB::raw('products'), 'products.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->whereNotNull('products.id')
            ->get();

        $brands = Product::select(DB::raw('brands.id AS brand_id'))
            ->leftJoin(DB::raw('categories'), 'categories.id', '=', 'products.category_id')
            ->leftJoin(DB::raw('brands'), 'brands.id', '=', 'products.brand_id')
            ->groupBy('brands.id')
            ->get();

        foreach ($get_categories as $cat) {
            if ($request->has("category-$cat->id")) {
                $d = array();
                foreach ($brands as $brand) {
                    if ($request->has("status-$cat->id-$brand->brand_id")) {
                        $disc = "discount-$cat->id-$brand->brand_id";
                        $discount = $request->$disc;
                        $d[] = array(
                            'id' => $brand->brand_id,
                            'discount' => $discount
                        );

                        $data = json_encode($d);
                    }
                }

                if ($request->customer_group_id != $cat->customer_group) {
                    CustomerGroupCategories::create([
                        'customer_group_id' => $request->customer_group_id,
                        'category_id' => $cat->id,
                        'discount' => $data,
                        'status' => 1,
                    ]);
                }
            }
        }

        return redirect('/admin/customer_group/detail/' . $request->customer_group_id);
    }

    public function edit($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $customer_group = CustomerGroup::find($id);
        return view('administrator.customer_group.edit', ['customer_group' => $customer_group]);
    }

    public function update($id, Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required',
        ]);

        if (!$request->has('status')) {
            $status = 0;
        } else {
            $status = 1;
        }

        $customer_group = CustomerGroup::find($id);
        $customer_group->name = $request->name;
        $customer_group->status = $status;

        $customer_group->save();

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return redirect('/admin/customer_group')->with(['success' => 'Your data updated successfully.']);
    }

    public function delete(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $count = Customers::where('customer_group_id', $request->ix)->count();
        if ($count == 0) {
            CustomerGroup::destroy($request->ix);
            //Write log
            createLog(static::$module, __FUNCTION__, $request->ix);
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }
}
