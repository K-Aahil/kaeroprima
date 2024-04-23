<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaLibrary;
use DataTables;
use File;
use DB;

class MediaLibraryController extends Controller
{
    private static $module = "media_library";
 
    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
       

        return view('administrator.media_library.index');
    }
    
    public function getData(Request $request){
        $query = MediaLibrary::select(DB::raw('media_library.*'));


        $data = $query->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = "";
            
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="'.route('admin.media_library.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
                $btn .= '<button class="btn btn-bg-light btn-active-color-primary btn-sm" data-copy="'.asset_administrator('assets/media/media_library/'.$row->image).'" onclick="copyToClipboard(this)">Copy</button>';
                $btn .= '<a href="'.asset_administrator('assets/media/media_library/'.$row->image).'" class="btn btn-bg-light btn-active-color-primary btn-sm" download="'.$row->judul.'">Download</a>';
                return $btn;
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }

    public function add(){
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        $media_library = MediaLibrary::first();

        return view('administrator.media_library.add', compact('media_library')); 
    }
     
    public function insert(Request $request){
        //Check permission

        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

    	$this->validate($request,[
    		'image' => 'required',
            'judul' => 'required',
    	]);

        if($request->has('image')){
            $file = $request->file('image');


            $file_name = time()."_".$file->getClientOriginalName();

            $file_format = $file->getClientOriginalExtension();

            $folder_up = upload_path('media_library');
            $file->move($folder_up,$file_name);
        }else{
            $file_name = null;
        }

        $media_library = MediaLibrary::create([
    		'image' => $file_name,
            'judul' => $request->judul,
            'format' => $file_format,
    	]);

        //Write log
        createLog(static::$module, __FUNCTION__, $media_library->id);
 
    	return redirect('/admin/media_library')->with(['success' => 'Your data added successfully.']);
    }

    public function detail($id){
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }

        $media_library = MediaLibrary::find($id);
        return view('administrator.media_library.detail', ['media_library' => $media_library]);
    }
    
    public function edit($id){
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $media_library = MediaLibrary::where('id', $id)->first();
        return view('administrator.media_library.edit', ['media_library' => $media_library]);
    }

    public function update($id, Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        $this->validate($request,[
            'judul' => 'required',
        ]);

        $media_library = MediaLibrary::find($id);
        $media_library->image = $request->image;
        $media_library->judul = $request->judul;

        if($request->image != ''){
            if(file_exists('./administrator/assets/media/media_library/'.$media_library->image) && $media_library->image != null){
                $file_old = './administrator/assets/media/media_library/'.$media_library->image;
                unlink($file_old);
            }

            $file = $request->file('image');
            $file_name = time()."_".$file->getClientOriginalName();

            $file_format = $file->getClientOriginalExtension();

            $folder_up = upload_path('media_library');
            $file->move($folder_up,$file_name);
            
            $media_library->image = $file_name;
            $media_library->format = $file_format;
        }

        $media_library->save();

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect('/admin/media_library')->with(['success' => 'Your data updated successfully.']);
    }
    
    public function delete(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $id = $request->ix;
        $media_library = MediaLibrary::find($id);
        $data = MediaLibrary::destroy($request->ix);
        if (!empty($media_library->image)) {
            $image_path = "./administrator/assets/media/media_library/".$media_library->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return response()->json($data);
    }

}
