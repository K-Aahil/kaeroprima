<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Models\ShortList;
use App\Models\ShortListItem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;
use Image;
use DB;

class ShortListController extends Controller
{

    private static $module = "short_lists";

    // Sort Parent
    public function index() {
        if (!isAllowed(static::$module, "view"))
            abort(403);

        return view('administrator.short_list.index');
    }

    public function getData(Request $request) {
        $data = ShortList::select(DB::raw('short_lists.*'))->orderBy('sort', 'asc')->get();
        return Datatables::of($data)
        ->addColumn('name_package', function ($row) {
            $name_package = '<div class="d-flex align-items-center"><div class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . img_src($row->image, "short") . ');"></span></div><div class="ms-5">'.$row->name.'</div></div>';
            return $name_package;
        })
        ->addColumn('action', function($row){
            $btn = "";
             if (!isAllowed(static::$module, "view"))
            abort(403);
            $btn .= '<a href="'.route('short-list.detail','short_list_id='.$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                    </svg>
                </span>
            </a>';
            if(isAllowed(static::$module, "edit")):
            $btn .= '<a href="'.route('short-list.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                    </svg>
                </span>
            </a>';
            endif;
            if(isAllowed(static::$module, "delete")):
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
        ->rawColumns(['action','status','name_package'])
        ->make(true);
    }

    public function create() {

        if (!isAllowed(static::$module, "add"))
            abort(403);

        return view('administrator.short_list.add');
    }

    public function store(Request $request) {

        if (!isAllowed(static::$module, "add"))
            abort(403);

            $this->validate($request,[ 'name' => 'required' ]);

            if($request->has('image')){
                $file = $request->file('image');
                $file_name = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                $folder_up = upload_path('short');
                $file->move($folder_up,$file_name);
            }else{
                $file_name = null;
            }

            $data = [
                'name'              => $request->name,
                'code'              => $request->code,
                'description'       => $request->description,
                'status'            => $request->has('status') ? 1 : 0,
                'slug'              => Str::slug($request->name),
                'image'             => $file_name,
                
            ];

            $short_list = ShortList::create($data);
            
            createLog(static::$module, __FUNCTION__, $short_list->id);
            return redirect()->route('short-list.index')->with('success', $request->name.' berhasil ditambahkan');
        
    }

    public function show(Request $request) {

        if (!isAllowed(static::$module, "detail"))
            abort(403);

        try {
            if(!isset($request->short_list_id))
                return redirect()->route('short-list.index')->with('error', 'Menu tidak tersedia atau telah dihapus');

            $id = $request->short_list_id;
            $data = ShortList::with('list_items')->find($id);

            if(empty($data))
                return redirect()->route('short-list.index')->with('error', 'Menu tidak tersedia atau telah dihapus');

            return view('administrator.short_list.detail', compact('data', 'id'));
        } catch (\Throwable $th) {
            return redirect()->route('short-list.index')->with('error', 'Terjadi kesalahan. Tidak dapat menampilkan data Sort Item.');
        }
    }

    public function edit($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $short_list = ShortList::find($id);
        return view('administrator.short_list.edit', ['short_list' => $short_list]);
    }

    public function update(Request $request, $id) {

        if (!isAllowed(static::$module, "edit"))
            abort(403);

        $id = $request->id;
        $short_list = ShortList::find($id);

        $data = [
            'name'              => $request->name,
            'code'              => $request->code,
            'description'       => $request->description,
            'status'            => $request->has('status') ? 1 : 0,
            'slug'              => Str::slug($request->name),

        ];

        if ($request->hasFile('image')) {
            $imageBefore = $short_list->image;
            if (!empty($short_list->image)) {
                $image_path = "./administrator/assets/media/short/" . $short_list->image;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $image = $request->file('image');
            $fileName  = Str::slug(strtolower($request->name)) . '.' . str_replace(' ', '',$image->getClientOriginalExtension());
            // $fileName  = $image->getClientOriginalName();
            $path = upload_path('short');
            $image->move($path, $fileName);
            $data['image'] = $fileName;
        }

        $short_list = ShortList::where('id', $id)->update($data);
        createLog(static::$module, __FUNCTION__, $id);
        return redirect()->route('short-list.index')->with('success', 'Data berhasil dirubah');
    }

    public function destroy(Request $request) {

        try {
            $short = ShortList::findOrFail($request->ix);
            $short->delete();
            return response()->json($short, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    // Sort Item
    public function storeItem(Request $request) {
        if (!isAllowed(static::$module, "add"))
            abort(403);

        $this->validate($request, [
            'short_list_id'     => 'required',
            'title'             => 'required',
        ]);

        try {

            $filename = null;
            if($request->has('image')){

                $file = $request->file('image');
                $filename = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                $folder_up = upload_path('items');
                $file->move($folder_up, $filename);
                // Image::make($folder_up . '/' . $filename)->resize(110, 110)->save();

            }

            $status = 0;
            if (isset($request->status) && $request->status != '')
                $status = 1;

            $sort = ShortListItem::getNextSortRoot($request->short_list_id);

            $short_item = ShortListItem::create([
                'short_list_id'     => $request->short_list_id,
                'title'             => $request->title,
                'title_an'          => $request->title_an,
                'sub_title'         => $request->sub_title,
                'sub_title_an'      => $request->sub_title_an,
                'description'       => $request->description,
                'description_an'    => $request->description_an,
                'url'               => $request->url,
                'status'            => $status,
                'sort'              => $sort,
                'image'             => $filename

            ]);

            return response()->json($short_item, 200);

        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function updateItem(Request $request) {
        if (!isAllowed(static::$module, "edit"))
            abort(403);

        try {

            if (isset($request->arraydata)) {
                $items = $request->arraydata;
                foreach ($items as $item) {
                    $short_list_item = ShortListItem::find($item['id']);

                    $short_list_item->update([
                        'title'             => $item['title'],
                        'title_an'          => $item['title_an'],
                        'sub_title'         => $item['sub_title'],
                        'sub_title_an'      => $item['sub_title_an'],
                        'description'       => $item['description'],
                        'description_an'    => $item['description_an'],
                        'url'               => $item['url'],
                        'status'               => $item['status'],

                    ]);
                }
            } else {

                $this->validate($request, [
                    'title_'.$request->index            => 'required',
                ]);

                $short_list_item = ShortListItem::find($request['index']);
                $index = $request->index;

                $filename = $short_list_item->image;
                if($request->has('image_'.$index)){

                    $file = $request->file('image_'.$index);
                    $filename = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                    $folder_up = upload_path('items');
                    $file->move($folder_up, $filename);
                  
                    $file_path = upload_path('items', $short_list_item->image);
                    if(File::exists($file_path)) File::delete($file_path);
                    // Image::make($folder_up . '/' . $filename)->resize(110, 110)->save();

                }

                $short_list_item->update([

                    'title'             => $request['title_'.$index],
                    'title_an'          => $request['title_an_'.$index],
                    'sub_title'         => $request['sub_title_'.$index],
                    'sub_title_an'      => $request['sub_title_an_'.$index],
                    'description'       => $request['description_'.$index],
                    'description_an'    => $request['description_an_'.$index],
                    'url'               => $request['url_'.$index],
                    'status'               => $request['status_'.$index],
                    'image'             => $filename

                ]);
                return response()->json($short_list_item, 200);
            }
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function generateItem(Request $request) {

        try {
            if (is_array($request->arraydata)) {
                foreach ($request->arraydata as $value) {
                    $short_list_item = ShortListItem::find($value['id']);
                    if (!empty($short_list_item)) {
                        $short_list_item->update([
                            'sort' => $value['sort'],
                            // 'parent' => $value['parent'],
                            // 'depth' => $value['depth'],
                        ]);
                    }

                }
            }
            return response()->json($request->arraydata, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }

    public function deleteItem(Request $request) {
        if (!isAllowed(static::$module, "delete"))
            abort(403);

        try {
            $short_item = ShortListItem::find($request->id);
            $short_item->delete();
            return response()->json($short_item, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }

    public function updateOrder(Request $request) {

        $newOrder = $request->order;
        foreach ($newOrder as $index => $item) {
            $short_list_item = ShortList::find($item);

            $short_list_item->update([
                'sort' => $index + 1,
            ]);
        }
    }

    public function changeStatus(Request $request)
    {
        $data['status'] = $request->status == "active" ? 1 : 0;
        $id = $request->ix;
        ShortList::where(["id" => $id])->update($data);

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json(['message' => 'Status has changed.']);
    }

    public function isExistKode(Request $request){
        if($request->ajax()){
            $short_list = ShortList::select("*");

            if(isset($request->code)){
                $short_list->where('code', $request->code);
            }

            if(isset($request->id)){
                $short_list->where('id', '<>', $request->id);
            }
            $data = [ 'valid' => ( $short_list->count() == 0)  ];
            if(!empty($short_list)){
                return $data;
            }else{
                return $data;
            }
        }
    }

    public function isExistItemKode(Request $request){
        {
            // Mendapatkan nilai sub_title dari request
            $subTitle = $request->input('sub_title');
    
            // Lakukan pengecekan apakah sub_title sudah ada di database
            $isExist = ShortListItem::where('sub_title', $subTitle)->exists();
    
            // Mengembalikan hasil pengecekan
            return response()->json(!$isExist);
        }
    }
    


}
