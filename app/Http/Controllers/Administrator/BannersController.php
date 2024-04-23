<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banners;
use DataTables;
use File;
use Image;


class BannersController extends Controller
{
    private static $module = "banners";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }

        return view('administrator.banners.index');
    }

    public function getData(Request $request){
        if($request->status != ""){
            $status = $request->status == "active" ? 1 : 0;
            $data = Banners::where("status",$status)->get();
        }else{
            $data = Banners::get();
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('title', function ($row) {
                $url = asset_administrator("assets/media/banners/$row->image");
                $title = '<div class="d-flex align-items-center"><div class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . $url . ');"></span></div><div class="ms-5"><a href="'.route('admin.banners.detail',$row->id).'" class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->title . '</a></div></div>';
                return $title;
            })
            ->addColumn('status', function ($row) {
                if ($row->status) {
                    $status = '<div class="badge badge-light-success mb-5">Active</div>';
                    $status .= '<div class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input h-20px w-30px changeStatus" data-ix="' . $row->id . '" type="checkbox" value="1"
                        name="status" checked="checked" />
                    <label class="form-check-label fw-bold text-gray-400 ms-3"
                        for="status"></label>
                </div>';
                } else {
                    $status = '<div class="badge badge-light-danger mb-5">Inactive</div>';
                    $status .= '<div class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input h-20px w-30px changeStatus" data-ix="' . $row->id . '" type="checkbox" value="1"
                        name="status"/>
                    <label class="form-check-label fw-bold text-gray-400 ms-3"
                        for="status"></label>
                </div>';
                }
                return $status;
            })
            ->addColumn('action', function($row){
                $btn = "";
                if(isAllowed(static::$module, "detail"))://Check permission
                $btn .= '<a href="'.route('admin.banners.detail',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                        </svg>
                    </span>
                </a>';
                endif;
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="'.route('admin.banners.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                        </svg>
                    </span>
                </a>';
                endif;
                if(isAllowed(static::$module, "delete"))://Check permission
                $btn .= '<a href="#" data-ix="' . $row->id . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                        </svg>
                    </span>
                </a>';
                endif;
                return $btn;
            })
            ->rawColumns(['title', 'status', 'action'])
            ->make(true);
    }

    public function add(){
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        return view('administrator.banners.add');
    }

    public function insert(Request $request){
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        $this->validate($request,[
            'image' => 'required|image',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');

            $file_name = str_replace(' ', '', time()."_".$file->getClientOriginalName());

            $folder_up = upload_path('banner');
            $file->move($folder_up,$file_name);
        } else {
            $file_name = null;
        }


        // if ($request->has('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension(); // Get the file extension
        //     $file_name = Str::slug(time() . "_" . $file->getClientOriginalName()) . '.' . $extension;
        //     $folder_up = upload_path('banner');
        
        //     // Check if the file is an SVG
        //     if ($extension === 'svg') {
        //         // Move the SVG file directly without resizing
        //         $file->move($folder_up, $file_name);
        //     } else {
        //         // For non-SVG images, resize and save using Intervention Image
        //         $file->move($folder_up, $file_name);
        //         Image::make($folder_up . '/' . $file_name)->resize(1440, 720)->save();
        //     }        
        // }else{
        //     $file_name = null;
        // }

        $banner = Banners::create([
            'title' => $request->title,
            'description' => $request->description,
            'same_as_default' => $request->has('same_as_default') ? 1 : 0,
            'title_an' => $request->title_an,
            'description_an' => $request->description_an,
            'show_button' => $request->has('show_button') ? 1 : 0,
            'button_text' => json_encode([
            'button_text_get' => $request->button_text_get,
            'button_text_make' => $request->button_text_make,
            'button_text_an' => $request->button_text_an
            ]),
            'button_url' => $request->button_url,
            'image' => $file_name,
            'status' => 0,
        ]);

        //Write log
        createLog(static::$module, __FUNCTION__, $banner->id);

        return redirect('/admin/banners')->with(['success' => 'Your data added successfully.']);
    }

    public function detail($id){
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }

        $banners = Banners::find($id);
        return view('administrator.banners.detail', ['banners' => $banners]);
    }

    public function edit($id){
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        $banners = Banners::find($id);
        return view('administrator.banners.edit', ['banners' => $banners]);
    }

    public function update($id, Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        if(!$request->has('same_as_default')){
            $same_as_default = 0 ;
        }else{
            $same_as_default = 1 ;
        }

        $banners = Banners::find($id);
        $banners->title = $request->title;
        $banners->description = $request->description;
        $banners->same_as_default = $same_as_default;
        $banners->title_an = $request->title_an;
        $banners->description_an = $request->description_an;
        $banners->show_button = $request->has('show_button') ? 1 : 0;
        $banners->button_text = json_encode([
            'button_text_get' => $request->button_text_get,
            'button_text_make' => $request->button_text_make,
            'button_text_an' => $request->button_text_an
        ]);
        $banners->button_url = $request->button_url;

    if($request->hasFile('image')) {
    $this->validate($request, [
        'image' => 'required|image',
    ]);

    if($request->image != ''){
        if(file_exists('./administrator/assets/media/banner/'.$banners->image) && $banners->image != null){
            $file_old = './administrator/assets/media/banner/'.$banners->image;
            unlink($file_old);
        }

        $file       = $request->file('image');
        $file_name  = str_replace(' ', '', time()."_".$file->getClientOriginalName());
        $folder_up  = upload_path('banner');
        $file->move($folder_up, $file_name);
        
        $banners->image = $file_name;
    }
    

    // if(!empty($banners->image)) {
    //     $image_path = upload_path('banner').'/'.$banners->image;
    //     if(file_exists($image_path)) {
    //         unlink($image_path);
    //     }
    // }

    // $file = $request->file('image');
    // $extension = $file->getClientOriginalExtension(); // Get the file extension
    // $file_name = Str::slug(time()."_".$file->getClientOriginalName()). '.' . $extension;
    // $folder_up = upload_path('banner');

    // if ($extension === 'svg') {
    //     // Move the SVG file directly without resizing
    //     $file->move($folder_up, $file_name);
    //     $banners->image = $file_name;
    // } else {
    //     // For non-SVG images, resize and save using Intervention Image
    //     $file->move($folder_up, $file_name);
    //     Image::make($folder_up . '/' . $file_name)->resize(1440, 720)->save();
    //     $banners->image = $file_name;
    // }
    }

        $banners->save();
        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect('/admin/banners')->with(['success' => 'Your data updated successfully.']);
    }

    public function delete(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $id = $request->ix;
        $banners = Banners::find($id);
        if (!empty($banners->image)) {
            $image_path = upload_path('banner').'/'.$banners->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $data = Banners::destroy($request->ix);

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return response()->json($data);
    }

    public function changeStatus(Request $request)
    {
        $status = $request->status == "active" ? 1 : 0;
        $id = $request->ix;

        $currentStatus = Banners::where(["id" => $id])->value("status");

        Banners::where(["id" => $id])->update(["status" => $status]);

        if ($currentStatus == 1 && $status == 0) {
            $otherElement = Banners::where("id", "<>", $id)->where("status", 0)->first();

            if ($otherElement) {
                Banners::where("id", $otherElement->id)->update(["status" => 1]);
            }
        }
        if ($status == 1) {
            Banners::where("id", "<>", $id)->where("status", 1)->update(["status" => 0]);
        }

        // Write log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json(['message' => 'Status has changed.']);
    }

}
