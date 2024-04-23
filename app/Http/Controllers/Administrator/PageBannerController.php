<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\Pages;
use App\Models\PageBanners;
use DataTables;
use File;
use Image;
use banner;
use DB;

class PageBannerController extends Controller
{
    private static $module = "page_banners";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
        $banner_about = PageBanners::where('slug','about-us')->first();
        $banner_service = PageBanners::where('slug','services')->first();
        $banner_partner = PageBanners::where('slug','partners')->first();
        $page_banners = Pages::select(DB::raw('pages.*, page_banners.banner as banner_page, page_banners.title as title_page, page_banners.description as description_page'))
        ->leftJoin(DB::raw('page_banners'), 'page_banners.page_id', '=', 'pages.id')
        ->where('pages.status',1)->get();
        return view("administrator.page_banners.index" , compact("page_banners","banner_about","banner_service","banner_partner"));
    }
    
    public function updateGeneral(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
        // dd($request);
        $index = 0;
        if (!empty($request->pages)) {
            foreach ($request->pages as $slug=>$page) {
                $page_banners = [
                    'page' => $slug,
                    'page_id' => isset($page['page_id']) ? $page['page_id'] : 0,
                    'slug' =>  $slug,
                    'title' =>  $page['title'],
                    'description' =>  $page['description'],
                    
                ];

                if ($request->hasFile('pages.'.$slug.'.banner')) {
                    $imageBefore = $slug;
                    if (!empty($slug)) {
                        $image_path = "./administrator/assets/media/page_banners/" . $slug;
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                    }

                    $image = $request->file('pages.'.$slug.'.banner');
                    $fileName  =  $slug. '.' . $image->getClientOriginalExtension();
                    $path = upload_path('page_banners') . $fileName;
                    $page_banner = upload_path('page_banners');
                    $image->move($page_banner,$fileName);
                    $page_banners['banner'] = $fileName;
                }

                $page_banner = PageBanners::where("slug",$slug)->first();
                if (!empty($page_banner)) {
                    PageBanners::where(["slug" => $slug])->update($page_banners);
                }else{
                    PageBanners::create($page_banners);
                }

            }
        }
        return redirect(route('admin.page-banners'));
    }
}