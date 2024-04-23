<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurGroup;
use DataTables;
use File;

class OurGroupController extends Controller
{
    public static $module = "our_groups";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
			abort(403);
		}
        return view('administrator.our_groups.index');
    }

    public function getData(Request $request){

        if($request->status != ""){
            $status = $request->status == "active" ? 1 : 0;
            $data = OurGroup::where("status",$status)->orderBy('order', 'asc')->get();
        }else{
            $data = OurGroup::orderBy('order', 'asc')->get();
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('order', function ($row) {
                $order ='<div>(' . $row->order . ')</div>';
                return $order;
            })
            ->addColumn('name', function ($row) {
                $url = asset_administrator("assets/media/our_group/$row->image");
                $name = '<div class="d-flex align-items-center"><div class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . $url . ');"></span></div><div class="ms-5"><div class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">' . $row->name . '</div></div></div>';
                return $name;
            })
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
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="'.route('admin.our_groups.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
            ->rawColumns(['order','name', 'status', 'action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!isAllowed(static::$module, "add")) 
        {
			abort(403);
		}
        return view('administrator.our_groups.add'); 
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
        if (!isAllowed(static::$module, "add")) 
        {
			abort(403);
		}
    	$this->validate($request,[
    		'name' => 'required',
            'order' => 'required',
			'image' => 'required|mimes:jpeg,png,jpg|max:2048',
    	]);

        $file = $request->file('image');
		$fileName = time()."_".$file->getClientOriginalName();
        dd($fileName);
		$folderUp = upload_path('our_group');
		$file->move($folderUp, $fileName);
 
        if (!$request->has('status')) {
            $status = 0 ;
        } else {
            $status = 1 ;
        }

        $our_groups = OurGroup::create([
    		'name'      => $request->name,
            'order'      => $request->order,
    		'image'     => $fileName,
    		'status'    => $status,
    	]);

        //Write log
        createLog(static::$module, __FUNCTION__, $our_groups->id);
 
    	return redirect()->route('admin.our_groups')->with(['success' => 'Your data added successfully.']);
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
        //Check permission
        if (!isAllowed(static::$module, "edit")) 
        {
			abort(403);
		}

        $our_groups = OurGroup::find($id);
        return view('administrator.our_groups.edit', ['our_groups' => $our_groups]);
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
        if (!isAllowed(static::$module, "edit")) 
        {
            abort(403);
        }

        $this->validate($request, [
    		'name'      => 'required',
    	]);

        if(!$request->has('status')){
            $status = 0 ;
        }else{
            $status = 1 ;
        }

        $our_groups         = OurGroup::find($id);
        $our_groups->name   = $request->name;
        $our_groups->order   = $request->order;
        $our_groups->status = $status;

        if($request->image != ''){
            if(file_exists('./administrator/assets/media/our_group/'.$our_groups->image)){
                $file_old = './administrator/assets/media/our_group/'.$our_groups->image;
                unlink($file_old);
            }

            $file       = $request->file('image');
            $fileName   = time()."_".$file->getClientOriginalName();
            $folderUp   = upload_path('our_group');
            $file->move($folderUp, $fileName);
            
            $our_groups->image = $fileName;
        }
        $our_groups->save();

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return redirect()->route('admin.our_groups')->with(['success' => 'Your data updated successfully.']);

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
        if (!isAllowed(static::$module, "delete")) 
        {
			abort(403);
		} 
        $id = $request->ix;
        $our_groups = OurGroup::find($id);
        if (!empty($our_groups->image)) {
            $image_path = "./administrator/assets/media/our_group/".$our_groups->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $data = OurGroup::destroy($request->ix);

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json(['message' => 'Our Group has been deleted.']);
    }
}
