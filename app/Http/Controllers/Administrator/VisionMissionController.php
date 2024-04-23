<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use DataTables;
use File;
use Image;
use DB;

class VisionMissionController extends Controller
{
    private static $module = "vision_mission";

   //Vision
   public function indexVisi()
   {
       //Check permission
       if (!isAllowed(static::$module, "view")) {
           abort(403);
       }

       $about_us = AboutUs::first();
       if(empty($about_us)){
           return view('administrator.about_us.visi_add');
       }else{
           return view('administrator.about_us.visi_edit', compact('about_us'));
       }
      

       return view('administrator.about_us.index');
   }
    
    public function getDataVisi(Request $request){
        $query = AboutUs::select(DB::raw('about_us.*'));


        $data = $query->get();

        if($request->status != ""){
            $status = $request->status == "active" ? 1 : 0;
            $data = $query->where("about_us.status", $status)->get();
        }else{
            $data = $query->get();
        }

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = "";
                if(isAllowed(static::$module, "detail"))://Check permission
                $btn .= '<a href="'.route('admin.about_us.detail',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                        </svg>
                    </span>
                </a>';
                endif;
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="'.route('admin.visi.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
            ->rawColumns(['title', 'description', 'status', 'action'])
            ->make(true);
    }

    public function addVisi(){
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        $about_us = AboutUs::first();

        return view('administrator.about_us.visi_add', compact('about_us')); 
    }
     
    public function insertVisi(Request $request){
        //Check permission

        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

    	$this->validate($request,[
            'visi_title' => 'required',
            'visi_sub_title' => 'required',
    	]);

        if ($request->has('visi_image')) {
            $file = $request->file('visi_image');

            $file_name2 = str_replace(' ', '', time()."_".$file->getClientOriginalName());

            $folder_up = upload_path('about_us');
            $file->move($folder_up,$file_name2);
        } else {
            $file_name2 = null;
        }

        // if ($request->has('visi_image')) {
        //     $file = $request->file('visi_image');
        //     $extension = $file->getClientOriginalExtension(); // Get the file extension
        //     $file_name2 = Str::slug(time() . "_" . $file->getClientOriginalName()) . '.' . $extension;
        //     $folder_up = upload_path('about_us');
        
        //     // Check if the file is an SVG
        //     if ($extension === 'svg') {
        //         // Move the SVG file directly without resizing
        //         $file->move($folder_up, $file_name2);
        //     } else {
        //         // For non-SVG images, resize and save using Intervention Image
        //         $file->move($folder_up, $file_name2);
        //         Image::make($folder_up . '/' . $file_name2)->resize(713, 430)->save();
        //     }        
        // }else{
        //     $file_name2 = null;
        // } 
 

        if (!$request->has('status')) {
            $status = 0 ;
        } else {
            $status = 1 ;
        }
        if(!$request->has('same_as_default2')){
            $same_as_default2 = 0 ;
        }else{
            $same_as_default2 = 1 ;
        }

        $about_us = AboutUs::create([
            'status'            => $status,
            'visi_title'=> $request->visi_title,
            'visi_sub_title'=> $request->visi_sub_title,
            'visi_image'=> $file_name2,
            'visi'=> $request->visi,
            'misi'=> $request->misi,
            'visi_title_an'=> $request->visi_title_an,
            'visi_sub_title_an'=> $request->visi_sub_title_an,
            'visi_an'=> $request->visi_an,
            'misi_an'=> $request->misi_an,
            'same_as_default2'   => $request->has('same_as_default2') ? 1 : 0,
    	]);
        
        //Write log
        createLog(static::$module, __FUNCTION__, $about_us->id);
 
    	return redirect('/admin/visi')->with(['success' => 'Your data added successfully.']);
    }

    public function detailVisi($id){
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }

        $about_us = AboutUs::find($id);
        return view('administrator.about_us.detail', ['about_us' => $about_us]);
    }
    
    public function editVisi(){
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }



        $about_us = AboutUs::first();
        return view('administrator.about_us.visi_edit', ['about_us' => $about_us]);
    }

    public function updateVisi($id, Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        $this->validate($request,[
            'visi_title' => 'required',
            'visi_sub_title' => 'required',
        ]);

      
        if (!$request->has('status')) {
            $status = 0 ;
        } else {
            $status = 1 ;
        }
        if(!$request->has('same_as_default2')){
            $same_as_default2 = 0 ;
        }else{
            $same_as_default2 = 1 ;
        }

        $about_us = AboutUs::find($id);
        $about_us->status          = $status;
        $about_us->visi_title       = $request->visi_title;
        $about_us->visi_sub_title   = $request->visi_sub_title;
        $about_us->visi       = $request->visi;
        $about_us->misi       = $request->misi;
        $about_us->visi_title_an       = $request->visi_title_an;
        $about_us->visi_sub_title_an   = $request->visi_sub_title_an;
        $about_us->visi_an       = $request->visi_an;
        $about_us->misi_an       = $request->misi_an;
        $about_us->same_as_default2 = $same_as_default2;

        if($request->visi_image != ''){
            if(file_exists('./administrator/assets/media/about_us/'.$about_us->visi_image) && $about_us->visi_image != null){
                $file_old = './administrator/assets/media/about_us/'.$about_us->visi_image;
                unlink($file_old);
            }

            $file       = $request->file('visi_image');
            $file_name2  = str_replace(' ', '', time()."_".$file->getClientOriginalName());
            $folder_up  = upload_path('about_us');
            $file->move($folder_up, $file_name2);
            
            $about_us->visi_image = $file_name2;
        }
        // if($request->hasFile('visi_image')) {
        //     $this->validate($request, [
        //         'visi_image' => 'required|image',
        //     ]);
        
        //     if(!empty($about_us->visi_image)) {
        //         $image_path = upload_path('about_us').'/'.$about_us->visi_image;
        //         if(file_exists($image_path)) {
        //             unlink($image_path);
        //         }
        //     }
        
        //     $file = $request->file('visi_image');
        //     $extension = $file->getClientOriginalExtension(); // Get the file extension
        //     $file_name2 = Str::slug(time()."_".$file->getClientOriginalName()). '.' . $extension;
        //     $folder_up = upload_path('about_us');
        
        //     if ($extension === 'svg') {
        //         // Move the SVG file directly without resizing
        //         $file->move($folder_up, $file_name2);
        //         $about_us->visi_image = $file_name2;
        //     } else {
        //         // For non-SVG images, resize and save using Intervention Image
        //         $file->move($folder_up, $file_name2);
        //         Image::make($folder_up . '/' . $file_name2)->resize(713, 430)->save();
        //         $about_us->visi_image = $file_name2;
        //     }
        // }


        $about_us->save();

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect('/admin/visi')->with(['success' => 'Your data updated successfully.']);
    }
    
    public function deleteVisi(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $id         = $request->ix;
        $about_us   = AboutUs::find($id);
        $data       = AboutUs::destroy($request->ix);
        if (!empty($about_us->visi_image)) {
            $image_path = "./administrator/assets/media/about_us/".$about_us->visi_image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return response()->json($data);
    }
}
