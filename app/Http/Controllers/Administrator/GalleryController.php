<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Input;
use App\Models\Gallery;
use App\Models\GalleryImage;
use DataTables;
use Image;
use File;
use DB;

class GalleryController extends Controller
{
    private static $module = "galleries";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }

        return view('administrator.galleries.index');
    }

    public function getData(Request $request) 
    {
        $query = Gallery::select(DB::raw('galleries.*, gallery_images.image'))
            ->leftJoin(DB::raw('gallery_images'), 'galleries.id', '=', 'gallery_images.gallery_id')
            ->groupBy(DB::raw('galleries.id,gallery_images.gallery_id'))
            ->orderBy('galleries.created_at', 'DESC');

        if ($request->status != "") {
            $status = $request->status == "active" ? 1 : 0;
            $data = Gallery::where("status", $status)->get();
        } else {
            $data = Gallery::get();
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('status', function ($row) {
                if ($row->status == 1) {
                    $status = '<div class="badge badge-light-success">Active</div>';
                } else {
                    $status = '<div class="badge badge-light-danger">Inactive</div>';
                }
                return $status;
            })
            ->addColumn('action', function($row){
                $btn = "";
                if (isAllowed(static::$module, "detail")) : //Check permission
                    $btn .= '<a href="' . route('admin.galleries.detail', $row->id) . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                    <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/><path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/></svg>
                    </span>
                </a>';
                endif;
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="'.route('admin.galleries.edit', $row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
            })->rawColumns(['status', 'action'])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check permission

        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        return view('administrator.galleries.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        $this->validate($request, [
    		'name'      => 'required',
            'images'     => 'required',
    	]); 

        if (!$request->has('same_as_default')) {
            $same_as_default = 0 ;
        } else {
            $same_as_default = 1 ;
        }

        $data = [
            'name'              => $request->name, 
            'same_as_default'   => $request->same_as_default, 
            'name_an'           => $request->name_an, 
            'status'            => $request->has('status') ? 1 : 0,
        ];

        $gallery = Gallery::create($data);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $fileName   =  time()."_".$image->getClientOriginalName();
                $path       = upload_path('gallery') . $fileName;
                Image::make($image->getRealPath())->resize(500, 500)->save($path, 100);
                $gallery->images()->create([
                    'image' => $fileName,
                ]);
            }
        }

        //Write log
        createLog(static::$module, __FUNCTION__, $gallery->id);
 
    	return redirect()->route('admin.galleries')->with(['success' => 'Your data added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }

        $detail = Gallery::where(['id' => $id])->with('images')->first();
        if (!$detail) {
            return abort(404);
        }

        return view('administrator.galleries.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        $edit = Gallery::where([
            'id' => $id
        ])->with('images')->first();

        if (!$edit) {
            return abort(404);
        }

        return view('administrator.galleries.edit', compact('edit'));
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
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        $this->validate($request, [
    		'name'      => 'required',
    	]);

        if (!$request->has('same_as_default')) {
            $same_as_default = 0 ;
        } else {
            $same_as_default = 1 ;
        }

        $id = $request->id;

        $data = [
            'name'              => $request->name,
            'same_as_default'   => $request->same_as_default, 
            'name_an'           => $request->name_an,  
            'status'            => $request->has('status') ? 1 : 0,
        ];

        $gallery = Gallery::where(['id' => $id])->first();
        $gallery->update($data);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $fileName   =  time()."_".$image->getClientOriginalName();
                $path       = upload_path('gallery') . $fileName;
                Image::make($image->getRealPath())->resize(500, 500)->save($path, 100);
                $gallery->images()->create([
                    'image' => $fileName,
                ]);
            }
        }

        if ($request->has('image_delete')) {
            $id_images = explode(',', $request->image_delete);
            if (count($id_images) > 0) {
                $files = GalleryImage::whereIn('id', $id_images)->get()->pluck('image')->filter(function ($value, $key) {
                    return !filter_var($value, FILTER_VALIDATE_URL);
                })->map(function ($image) {
                    return upload_path('gallery', $image);
                })->toArray();
                File::delete($files);
                GalleryImage::destroy($id_images);
            }
        }

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
 
    	return redirect()->route('admin.galleries')->with(['success' => 'Your data updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $id = $request->ix;
        $files = GalleryImage::where('gallery_id', $id)->get()->pluck('image')->filter(function ($value, $key) {
            return !filter_var($value, FILTER_VALIDATE_URL);
        })->map(function ($image) {
            return upload_path('gallery', $image);
        })->toArray();
        File::delete($files);
        Gallery::destroy($id);
        GalleryImage::where('gallery_id', $id)->delete();

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return response()->json(['message' => 'Gallery has been deleted.']);
    }
}
