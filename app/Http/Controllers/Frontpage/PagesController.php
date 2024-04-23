<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Pages;
use App\Models\Setting;
use App\Models\MenuItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index(Request $request)
    {
        $settings       = array_column(Setting::get()
                        ->toArray(), 'value', 'name');
        $menu           = MenuItems::where('menu','1')
                        ->orderBy('sort','asc')
                        ->get();
        $privacy        = MenuItems::where('menu','2')
                        ->get();
        $term           = MenuItems::where('menu','3')
                        ->get();
        $slug = $request->slug; 
        $detail_address = json_decode($settings['address'])->detail;
        $social_media   = json_decode($settings['social_media']);
        $pages          = Pages::where('slug',str_replace(".html","",$request->slug))
                        ->first();
        // dd($pages);
        $menu_footer = MenuItems::where('status',1)
                        ->orderBy('menu','asc')
                        ->orderBy('sort','asc')
                        ->where('label', '!=', 'PRODUCTS & SERVICES')
                        ->get();
        return view('frontpage.home.pages',compact('slug','menu','privacy','term','settings','detail_address','social_media','pages','menu_footer'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
