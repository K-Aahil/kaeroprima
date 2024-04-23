<?php
namespace App\Http\Controllers\Frontpage;
use DB;
use File;
use Image;
use DataTables;
use App\Models\Post;
use App\Models\Pages;
use App\Models\Product;
use App\Models\Setting;
use App\Models\OurGroup;
use App\Models\MenuItems;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // return $request;
        $query = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
            ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id');
        $query_page = Pages::select(DB::raw('pages.*'));
        if ($request->has("categories")) {
            $query->whereIn("posts.post_category_id", $request->categories);
        }
        if ($request->keywords != null || $request->keywords != ''){
            $query->whereRaw("title REGEXP ".DB::connection()->getPdo()->quote($request->keywords));
            $query_page->whereRaw("pages.title REGEXP ".DB::connection()->getPdo()->quote($request->keywords));
        }
        $data = $query->where("posts.status", 1)->orderBy("created_at", "DESC")->paginate(10);
        $pages = $query_page->where("pages.status", 1)->orderBy("created_at", "DESC")->paginate(10);
        $categories = PostCategory::where('status', true)->get();
        if ($request->ajax()) {
            // return view('frontpage.search.product_list', compact("products"))->render();
            return view('frontpage.search.search_list', compact("data", "categories","pages"))->render();
        }
        return view("frontpage.search.search", compact("data", "categories","pages"));
    }
    public function search(Request $request)
    {
        $artikel        = Post::where('title','like','%'.$request->search.'%')
                        ->where('status',1)                
                        ->get();
        $produk         = Product::where('name','like','%'.$request->search.'%')
                        ->where('status',1)     
                        ->get();
        $menu           = MenuItems::where('menu','1')
        ->orderBy('sort','asc')
        ->get();
        $privacy        = MenuItems::where('menu','2')
        ->get();
        $term           = MenuItems::where('menu','3')
        ->get();
        $our_partner    = OurGroup::select(DB::raw('our_groups.*'))
        ->where('our_partner_id','2')
        ->orderBy('sort','asc')
        ->get();
        $settings       = array_column(Setting::get()
        ->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media   = json_decode($settings['social_media']);
        // dd($artikel);
        return view("frontpage.home.search", compact("artikel", "produk",'menu','privacy','term','our_partner','settings','detail_address','social_media'));
    }
    public function detail(Request $request)
    {
        $detail = Post::where('slug', $request->slug)->first();
        if (!$detail) {
            return abort(404);
        }
        $recent_news = Post::where('status', true)->orderBy('created_at', 'DESC')->take(5)->get();
        $categories = PostCategory::where('status', true)->get();
        return view('frontpage.news.news_detail', compact("detail", "recent_news", "categories"));
    }
}