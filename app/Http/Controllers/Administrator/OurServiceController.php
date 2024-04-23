<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\OurService;
use App\Models\OurServiceItem;
use App\Models\DoctorSchedule;
use DataTables;
use Image;
use File;
use DB;

class OurServiceController extends Controller
{
    private static $module = "our_service";

    public function index()

    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }

        return view("administrator.our_service.index");
    }

    public function getData(Request $request)

    {
        // $query = OurService::select(DB::raw('our_services.*'))
        //     ->leftJoin(DB::raw('our_service_items'), 'our_services.id', '=', 'our_service_items.our_service_id');

        $query = OurService::with('items')->with('doctor_schedules');

        if ($request->status != "") {
            $status = $request->status == "active" ? 1 : 0;
            $data = $query->where("our_service.status", $status)->get();
        } else {
            $data = $query->get();
        }

        return DataTables::of($data)
        ->addColumn('title', function ($row) {
                $title = '<div class="d-flex align-items-center"><div class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . img_src($row->image, "our_service") . ');"></span></div><div class="ms-5">'.$row->title.'</div></div>';
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
            ->addColumn('action', function ($row) {
                $btn = "";
                if (isAllowed(static::$module, "detail")) : //Check permission
                    $btn .= '<a href="' . route('admin.our_service.detail', $row->id) . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                    <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/><path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/></svg>
                    </span>
                </a>';
                endif;
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="' . route('admin.our_service.edit', $row->id) . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
                $btn .= '<button class="btn btn-bg-light btn-active-color-primary btn-sm mt-1" data-copy="'.route('layanan_detail', $row->slug).'" onclick="copyToClipboard(this)">Copy</button>&nbsp;';
                return $btn;
            })->rawColumns(['title', 'status', 'action'])->make(true);
    }

    public function add()

    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }
        return view("administrator.our_service.add");
    }
    
    public function save(Request $request)

    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }

        $this->validate($request, [
            'title' => 'required'
        ]);

        $data = [
            'title'             => $request->title,
            'sub_title'         => $request->sub_title,
            'description'       => $request->description,
            // 'service_contact'   => $request->service_contact,
            'color'             => $request->color,
            'status'            => $request->has('status') ? 1 : 0,
            'slug'              => Str::slug($request->title),
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName  = time().Str::random(40).".".$image->getClientOriginalExtension();
            $path = upload_path('our_service');
            // Image::make($image->getRealPath())->resize(500, 500)->save($path, 100);
            // Image::make($image->getRealPath())->save($path, 100);
            $image->move($path, $fileName);
            $data['image'] = $fileName;
        }

        
        if ($request->hasFile('image_banner')) {
            $image_banner = $request->file('image_banner');
            $file_banner  = time().Str::random(40).".".$image_banner->getClientOriginalExtension();
            $path = upload_path('our_service');
            $image_banner->move($path, $file_banner);
            $data['image_banner'] = $file_banner;
        }


        $our_service = OurService::create($data);


        if ($request->has('items')) {
            $items = $request->items;
            $no = 1;
            foreach ($items as $item) {
                    if (isset($item['images'])) {
                        $images = $item['images'];
                        $fileName  = time().Str::random(40).".".$images->getClientOriginalExtension();
                        $path = upload_path('our_service_item');
                        // Image::make($image->getRealPath())->resize(500, 500)->save($path, 100);
                        // Image::make($image->getRealPath())->save($path, 100);
                        $images->move($path, $fileName);
                    
                    OurServiceItem::create([
                        'our_service_id'  => $our_service->id,
                        'title'           => $item['title'],
                        'sub_title'       => $item['sub_title'],
                        'status'          => !empty($item['status']) ? 1 : 0,
                        'image'           => $fileName,
                        
                    ]);
                }
            }
        }

        //Write log
        createLog(static::$module, __FUNCTION__, $our_service->id);
        return redirect(route('admin.our_service'));
    }

    public function detail($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }

        $detail = OurService::where(["id" => $id])->with("items")->with("doctor_schedules")->first();
        if (!$detail) {
            return abort(404);
        }

        return view('administrator.our_service.detail', compact("detail"));
    }

    public function edit($id)

    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }

        $edit = OurService::where(["id" => $id])->with("items")->first();

        if (!$edit) {
            return abort(404);
        }

        return view("administrator.our_service.edit", compact("edit"));
    }

    public function update(Request $request)

    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required'
        ]);

        $data = [
            'title'             => $request->title,
            'sub_title'         => $request->sub_title,
            'description'       => $request->description,
            // 'service_contact'   => $request->service_contact,
            'color'             => $request->color,
            'status'            => $request->has('status') ? 1 : 0,
            'slug'              => Str::slug($request->title),
        ];

        $id = $request->id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName  = time().Str::random(40).".".$image->getClientOriginalExtension();
            $path = upload_path('our_service');
            $image->move($path, $fileName);
            $data['image'] = $fileName;
        }
        $our_service = OurService::where(["id" => $id])->update($data);

        $id = $request->id;
        if ($request->hasFile('image_banner')) {
            $image_banner = $request->file('image_banner');
            $file_banner  = time().Str::random(40).".".$image_banner->getClientOriginalExtension();
            $path = upload_path('our_service');
            $image_banner->move($path, $file_banner);
            $data['image_banner'] = $file_banner;
        }
        $our_service = OurService::where(["id" => $id])->update($data);

        if ($request->has('items')) {
            $items = $request->items;
            $items_id = collect($request->items)->pluck('id');
            foreach ($items as $item) {
                if (isset($item['images'])) {
                        $images = $item['images'];
                        $fileName  = time().Str::random(40).".".$images->getClientOriginalExtension();
                        $path = upload_path('our_service_item');
                        $images->move($path, $fileName);

                    $data_update = [
                        'our_service_id'  => $id,  
                        'title'           => $item['title'],
                        'sub_title'       => $item['sub_title'],
                        'status'          => !empty($item['status']) ? 1 : 0,
                        'image'           => $fileName,
                    ];

                    if (!isset($item['id'])) {
                        OurServiceItem::create($data_update);
                    } else {
                        OurServiceItem::where(["id" => $item['id']])->update($data_update);
                    }
                }
            }
            OurServiceItem::whereNotIn('id', $items_id)->where('our_service_id', $id)->delete();
        }

        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect(route('admin.our_service'));
    }

    public function delete(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }
        $id = $request->ix;
        $doctorSchedule = DoctorSchedule::where('our_service_id', $id)->first();
        if (empty($doctorSchedule)) {
            $files = OurService::find($id);
            if (!empty($files->image)) {
                $image_path = "./administrator/assets/media/our_service/" . $files->image;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        
            $data = OurService::destroy($request->ix);
            // OurServiceItem::where('our_service_id', $id)->delete();

            //Write log
            createLog(static::$module, __FUNCTION__, $id);
            return response()->json($data);
        } 

        return response()->json('error');

    }

    public function changeStatus(Request $request)
    {
        $data['status'] = $request->status == "active" ? 1 : 0;
        $id = $request->ix;
        OurService::where(["id" => $id])->update($data);

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json(['message' => 'Status has changed.']);

        
    }
}
