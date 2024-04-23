<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Administrator\OurPartnerController;
use DB;
use App\Models\City;
use App\Models\Post;
use App\Models\Pages;
use App\Models\Branch;
use App\Models\Brands;
use App\Models\Career;
use App\Models\AboutUs;
use App\Models\Banners;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Visitor;
use App\Models\Category;
use App\Models\OurGroup;
use App\Models\OurPromo;
use App\Models\MenuItems;
use App\Models\ShortList;
use App\Models\CareerPath;
use App\Models\OrderItems;
use App\Models\OurPartner;
use App\Models\OurService;
use App\Models\Subscriber;
use App\Models\ProductInquiries;
use App\Models\ContactList;
use App\Models\FaqListItem;
use App\Models\PageBanners;
use App\Models\DirectorList;
use App\Models\PostCategory;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use App\Models\ShortListItem;
use App\Models\CareerCategory;
use App\Models\DoctorSchedule;
use App\Models\OurServiceItem;
use App\Models\DirectorListItem;
use App\Models\JobTitle;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
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
        $pages          = Pages::select(DB::raw('pages.*'))
                        ->orderBy('pages.created_at', 'DESC')
                        ->get();
        $artikel        = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
                        ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id')
                        ->where("posts.status", 1)
                        ->orderBy("posts.tanggal", "DESC")
                        ->limit(3)->get();
        $settings       = array_column(Setting::get()
                        ->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media   = json_decode($settings['social_media']);
        $product_unggulan = Product::select(DB::raw('product.*'))
                        ->orderBy('sort','asc')
                        ->limit(3)
                        ->get();
        $about_us       = AboutUs::orderBy('about_us.created_at', 'DESC')
                        ->first();
        $banners        = Banners::where('status', true)
                        ->orderBy('banners.created_at', 'DESC')
                        ->limit(1)
                        ->get();
        $testimonial    = Testimonials::all();
        $achievement    = ShortListItem::where('short_list_id','1')
                        ->orderBy('sort','asc')
                        ->limit(3)
                        ->get();
        $nasabah        =ShortListItem::where('short_list_id','3')
                        ->orderBy('sort','asc')
                        ->get();
        $shortlist      = ShortList::where('status',1)
                        ->orderBy('sort','asc')
                        ->get();
        $management     = MenuItems::where('link','/')
                         ->first();
        // echo json_encode($banners);
        $menu_footer = MenuItems::where('status',1)
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->get();
        return view("frontpage.home.index", compact("about_us", "banners", "pages","settings","our_partner",'detail_address','artikel','social_media','menu','term','privacy','product_unggulan','achievement','testimonial','nasabah','shortlist','management','menu_footer'));
    }

    public function changeLanguage(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
    }

    public function getProducts(Request $request)
    {
        $category = $request->category;

        $query_new_products = Product::select(DB::raw('products.*, product_medias.data_file as image, MIN(product_variants.price) as min_price, MAX(product_variants.price) as max_price'))
                                ->orderBy('products.created_at', 'DESC')
                                ->leftJoin(DB::raw('product_medias'), 'products.id', '=', 'product_medias.product_id')
                                ->leftJoin(DB::raw('product_variants'), 'products.id', '=', 'product_variants.product_id')
                                ->groupBy('products.id')
                                ->limit(12);
        if($request->category != null){
            $new_products = $query_new_products->where("products.category_id", $category)->get();
        }else{
            $new_products = $query_new_products->get();
        }

        $output = [
            'product_list'   => $new_products
        ];
        return response()->json($output);
    }

    public function tentangKami(Request $request)
    {


        $our_groups     = OurGroup::where('status', true)->get();

        $visi_misi     = ShortList::where('slug', 'visi misi')->with('list_items')->first();
        return view('frontpage.home.tentang_kami', compact( "our_groups", "visi_misi"))->render();
    }

    //Sinar Gemilang

    public function service(Request $request){
        $shortlist      = ShortList::where('status',1)
                        ->orderBy('sort','asc')
                        ->get();
        $shortlist_items = ShortList::with('list_items')->where('status',1)
                        ->orderBy('sort','asc')
                        ->get();
        $settings       = array_column(Setting::get()
        ->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        $management     = MenuItems::where('link','/services')
                        ->first();

        return view('frontpage.home.services', compact("shortlist", "shortlist_items","settings","detail_address","menu_footer","management"))->render();
    }

    public function partner(Request $request){
        $banner = PageBanners::where('slug', 'partners')->first();
        $our_groups = OurGroup::where('status', true)->orderBy('sort', 'ASC')->get();
        return view('frontpage.home.partners', compact("our_groups", "banner"))->render();
    }


    public function about_us(Request $request){
        $banner          = PageBanners::where('slug', 'about-us')
                         ->first();
        $exellence       = ShortList::where('slug', 'exellence')
                         ->with(['list_items' => function($q) {
            $q->take(3);
        }])->first();
        $our_works       = ShortList::where('slug', 'how our works')
                         ->with(['list_items' => function($q) {
            $q->orderBy('sort', 'ASC');
        }])->first();
        $menu            = MenuItems::where('menu','1')
                         ->orderBy('sort','asc')->get();
        $privacy         = MenuItems::where('menu','2')
                         ->get();
        $term            = MenuItems::where('menu','3')
                         ->get();
        $visi_misi       = ShortList::where('slug', 'visi misi')
                         ->with('list_items')->first();
        $title           = 'about';
        $our_otorisasi   = OurGroup::select(DB::raw('our_groups.*'))
                         ->where('our_partner_id','2')->get();
        $settings        = array_column(Setting::get()
                         ->toArray(), 'value', 'name');
        $detail_address  = json_decode($settings['address'])->detail;
        $about_us        = AboutUs::where('status', true)
                        ->get();
        $social_media    = json_decode($settings['social_media']);
        $directory       = DirectorListItem::where('status', false)->get();
        $our_partner     = OurGroup::select(DB::raw('our_groups.*'))
                        ->where('our_partner_id','1')
                        ->orderBy('sort','asc')
                        ->get();
        $corporate_values = ShortListItem::where('short_list_id','2')
        ->orderBy('sort','asc')->get();
        // dd($our_otorisasi);
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        $management     = MenuItems::where('link','/about')
                        ->first();

        return view('frontpage.home.about', compact("exellence","directory","our_partner", "our_works", "banner", "about_us","title",'settings','detail_address','social_media','our_otorisasi','menu','privacy','term','corporate_values','menu_footer','management'))->render();
    }

    public function career_applicant(Request $request,$id){
        $job = JobTitle::select(DB::raw('job_titles.*'))->where('id', $id)->where('status', true)->first();
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        $management     = MenuItems::where('link','/job')
        ->first();
        return view('frontpage.home.careers', compact("settings","menu","term","privacy",'detail_address','social_media','job','menu_footer','management'))->render();
    }

    public function sendEmail(Request $request){
        $subscription = Subscriber::create([
    		'email' => $request->email,
    	]);
        return response()->json(['success' => true]);
    }

    public function sendContact(Request $request){
        $visitor = Visitor::create([
    		'email'     => $request->email,
    		'description' => $request->description,
    	]);
        return response()->json(['success' => true]);
    }

    //End Sinar Gemilang


    public function layananDetail(Request $request)
    {
        $data = OurService::with('items')
                            ->with('doctor_schedules')
                            ->with('contact_list')
                            ->where('slug', $request->slug)
                            ->first();
        if ($data == NULL) {
            return view('frontpage.home.404');
        } else {
            return view('frontpage.home.layanan_detail', compact("data"))->render();
        }

    }

    public function pesanLayanan(Request $request)
    {
        $data = ContactList::select(DB::raw('contact_lists.*'))
                        ->where("our_service_id", '=', $request->id)
                        ->get();

        return view('frontpage.home.pesan_layanan_list', compact("data"))->render();
    }

    public function artikel()
    {
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $social_media = json_decode($settings['social_media']);
        $detail_address = json_decode($settings['address'])->detail;
        $query = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
                ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id');

        $list_data = $query->where("posts.status", 1)->orderBy("posts.tanggal", "DESC")->paginate(12);
        $new_query = $query;
        $data_populare = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
                        ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id')
                        ->where("posts.status", 1)
                        ->where('posts.flag','populare')
                        ->orderBy("posts.created_at", "DESC")
                        ->limit(5)->get();
        $data_terbaru = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
                        ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id')
                        ->where("posts.status", 1)
                        ->where('posts.flag','new')
                        ->orderBy("posts.created_at", "DESC")
                        ->limit(5)->get();
        $categories = PostCategory::where('status', true)->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        // dd($data_populare);
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        return view('frontpage.home.artikel', compact("list_data","data_populare","data_terbaru", "categories","settings",'detail_address','settings','social_media','menu','term','privacy','menu_footer'));
    }

    public function artikel_detail(Request $request)
    {
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $data_populare = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
                        ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id')
                        ->where("posts.status", 1)
                        ->where('posts.flag','populare')
                        ->orderBy("posts.created_at", "DESC")
                        ->limit(5)->get();
        $detail = Post::where('slug', $request->slug)->first();
        if (!$detail) {
            return abort(404);
        }
        $recent_news = Post::where('status', true)->orderBy('created_at', 'DESC')->take(5)->get();
        $categories = PostCategory::where('status', true)->get();
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        // dd($settings);
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        return view('frontpage.home.artikel_detail', compact("detail","data_populare", "recent_news", "categories","settings",'detail_address','settings','social_media','menu','privacy','term','menu_footer'))->render();
    }

    public function filterArtikel(Request $request)
    {
        $data = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
                        ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id')
                        ->with('category')
                        ->when(!empty($request->categories), function($query) use ($request) {
                            $query->where('post_category_id', $request->categories);
                        })->get();

        return view('frontpage.home.artikel_list', compact("data"))->render();
    }

    public function kontakKami(Request $request)
    {
        $contact_lists     = ContactList::where('status', true)->get();

        return view('frontpage.home.kontak',compact("contact_lists"))->render();
    }

    public function job_title(Request $request)
    {
        $job_title = JobTitle::where('status', true)->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        $management     = MenuItems::where('link','/job')
                        ->first();
        return view('frontpage.home.karir', compact('job_title','settings','detail_address','menu_footer','management'))->render();
    }


    public function contact(Request $request)
    {
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        $menu_footer = MenuItems::where('status',1)
        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->get();
        return view('frontpage.home.contact', compact("settings","menu","term","privacy",'detail_address','social_media','menu_footer'))->render();
    }

    public function contact_save(Request $request){


    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
            'subject' => 'required',
            'description' => 'required',
    	]);



        $page = Visitor::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'subject' => $request->subject,
    		'description' => $request->description,
    	]);


    	return redirect('member')->with(['success' => 'Your data added successfully.']);
    }

    public function inquiries(Request $request)
    {
        $product = Product::select(DB::raw('product.*'))->where('status',1)->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $faq = FaqListItem::where('faq_list_id','1')->orderBy('sort','asc')->get();
        return view('frontpage.home.produk_kredit',compact('menu','privacy','term','settings','product','detail_address','social_media','faq'))->render();
    }

    public function inquiries_save(Request $request){


    	$this->validate($request,[
            'product_id' => 'required',
    		'name' => 'required',
    		'email' => 'required',
            'phone' => 'required',
    	]);



        $inquiries = productInquiries::create([
            'product_id' => $request->product_id,
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    	]);


    	return redirects('inquiries')->with(['success' => 'Your data added successfully.']);
    }


    public function karir(Request $request)
    {
        $query = Career::select(DB::raw('careers.*, career_categories.name as career_category_name, career_paths.name as career_path_name'))
            ->leftJoin(DB::raw('career_categories'), 'career_categories.id', '=', 'careers.career_category_id')
            ->leftJoin(DB::raw('career_paths'), 'career_paths.id', '=', 'careers.career_path_id');

        if ($request->has("categories")) {
            $query->whereIn("careers.career_category_id", $request->categories);
        }

        if ($request->has("educations")) {
            $query->whereIn("careers.career_path_id", $request->educations);
        }

        $data = $query->where("careers.status", 1)->orderBy("created_at", "DESC")->get();

        $categories = CareerCategory::where('status', true)->get();
        $educations = CareerPath::where('status', true)->get();

        $management     = MenuItems::where('link','/job')
                        ->first();

        return view('frontpage.home.karir', compact("data", "categories", "educations",'management'))->render();
    }

    public function karirDetail(Request $request)
    {
        $detail = Career::select(DB::raw('careers.*, career_categories.name as career_category_name, career_paths.name as career_path_name'))
            ->leftJoin(DB::raw('career_categories'), 'career_categories.id', '=', 'careers.career_category_id')
            ->leftJoin(DB::raw('career_paths'), 'career_paths.id', '=', 'careers.career_path_id')
            ->where('slug', $request->slug)
            ->first();

        if (!$detail) {
            return abort(404);
        }

        return view('frontpage.home.karir_detail', compact("detail"))->render();
    }

    public function filterKarir(Request $request)
    {
        $data = Career::with('category', 'path')
                        ->when(!empty($request->categories), function($query) use ($request) {
                            $query->where('career_category_id', $request->categories);
                        })
                        ->when(!empty($request->educations), function($query) use ($request) {
                            $query->whereIn('career_path_id', $request->educations);
                        })->get();

        return view('frontpage.home.karir_list', compact("data"))->render();
    }

    public function marketplace(Request $request){
        $query_new_products = Product::orderBy('products.created_at', 'DESC')
        ->limit(12)->get();
        $query_new_products = Product::where('status', true)->get();

        return view('frontpage.home.marketplace', compact("query_new_products"))->render();
    }

    public function layananDoktorUmum(Request $request)
    {
    }

    public function layananHomecare(Request $request){
        return view('frontpage.home.layanan_homecare')->render();
    }

    public function produk_simpanan(Request $request) {
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $product = Product::select(DB::raw('product.*'))->where('category','simpanan')->where('status','1')->get();
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        $faq = FaqListItem::where('faq_list_id','1')->orderBy('sort','asc')->get();
        return view('frontpage.home.produk_simpanan',compact('menu','privacy','term','product','settings','detail_address','social_media','faq'))->render();
    }

    public function produk_kredit(Request $request) {
        $product = Product::select(DB::raw('product.*'))->where('category','kredit')->where('status','1')->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $faq = FaqListItem::where('faq_list_id','1')->orderBy('sort','asc')->get();
        return view('frontpage.home.produk_kredit',compact('menu','privacy','term','settings','product','detail_address','social_media','faq'))->render();
    }

    public function detail_produk_kredit(Request $request){
        $kredit = Product::select(DB::raw('product.*'))->where('category','kredit')->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $product = Product::where('slug',$request->slug)->first();
        // dd($product);
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        return view('frontpage.home.detail_produk_kredit',compact('menu','privacy','term','settings','product','kredit','detail_address','social_media'))->render();
    }

    public function detail_produk_simpanan(Request $request){
        $product = Product::where('slug',$request->slug)->first();
        $simpanan = Product::select(DB::raw('product.*'))->where('category','simpanan')->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        return view('frontpage.home.detail_produk_simpanan',compact('menu','privacy','term','product','settings','detail_address','simpanan','social_media'))->render();
    }

    public function got(Request $request)
    {
        $product = Product::select(DB::raw('product.*'))->where('status',1)->get();
        $settings = array_column(Setting::get()->toArray(), 'value', 'name');
        $detail_address = json_decode($settings['address'])->detail;
        $social_media = json_decode($settings['social_media']);
        $menu = MenuItems::where('menu','1')->orderBy('sort','asc')->get();
        $privacy = MenuItems::where('menu','2')->get();
        $term = MenuItems::where('menu','3')->get();
        $faq = FaqListItem::where('faq_list_id','1')->orderBy('sort','asc')->get();
        return view('frontpage.home.produk_kredit',compact('menu','privacy','term','settings','product','detail_address','social_media','faq'))->render();
    }

    public function got_save(Request $request){


    	$this->validate($request,[
    		'email' => 'required',
            'description' => 'required',
    	]);



        $visitor = Visitor::create([
    		'email' => $request->email,
    		'description' => $request->description,
    	]);


    	return redirects('got')->with(['success' => 'Your data added successfully.']);
    }
}


