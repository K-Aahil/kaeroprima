<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Models\Menu;
use App\Models\MenuItems;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;
use Image;
use DB;

class MenuManagementController extends Controller
{

    private static $module = "menu_managements";

    // Sort Parent
    public function index() {
        if (!isAllowed(static::$module, "view"))
            abort(403);

        return view('administrator.menu-management.index');
    }

    public function getData(Request $request) {
        $data = Menu::All();
        return Datatables::of($data)
        ->addColumn('name_package', function ($row) {
            $name_package = '<div class="d-flex align-items-center"><div class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . img_src($row->image, "short") . ');"></span></div><div class="ms-5">'.$row->name.'</div></div>';
            return $name_package;
        })
        ->addColumn('action', function($row){
            $btn = "";
             if (!isAllowed(static::$module, "view"))
            abort(403);
            $btn .= '<a href="'.route('menu-management.detail','menu='.$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                    </svg>
                </span>
            </a>';
            if(isAllowed(static::$module, "edit")):
            $btn .= '<a href="'.route('menu-management.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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

        return view('administrator.menu-management.add');
    }

    public function store(Request $request) {

        if (!isAllowed(static::$module, "add"))
            abort(403);

            $this->validate($request,[ 'name' => 'required' ]);

            // if($request->has('image')){
            //     $file = $request->file('image');
            //     $file_name = str_replace(' ', '', time()."_".$file->getClientOriginalName());
            //     $folder_up = upload_path('short');
            //     $file->move($folder_up,$file_name);
            // }else{
            //     $file_name = null;
            // }

            $data = [
                'name'              => $request->name,
                // 'code'              => $request->code,
                // 'description'       => $request->description,
                // 'status'            => $request->has('status') ? 1 : 0,
                // 'slug'              => Str::slug($request->name),
                // 'image'             => $file_name,
                
            ];

            $menu_management = Menu::create($data);
            
            createLog(static::$module, __FUNCTION__, $menu_management->id);
            return redirect()->route('menu-management.index')->with('success', $request->name.' berhasil ditambahkan');
        
    }

    public function show(Request $request) {

        if (!isAllowed(static::$module, "detail"))
            abort(403);

        try {
            if(!isset($request->menu))
                return redirect()->route('menu-management.index')->with('error', 'Menu tidak tersedia atau telah dihapus');

            $id = $request->menu;
            $data = Menu::with('list_items')->find($id);

            if(empty($data))
                return redirect()->route('menu-management.index')->with('error', 'Menu tidak tersedia atau telah dihapus');

            return view('administrator.menu-management.detail', compact('data', 'id'));
        } catch (\Throwable $th) {
            return redirect()->route('menu-management.index')->with('error', 'Terjadi kesalahan. Tidak dapat menampilkan data Sort Item.');
        }
    }

    public function edit($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $menu_management = Menu::find($id);
        return view('administrator.menu-management.edit', ['menu_management' => $menu_management]);
    }

    public function update(Request $request, $id) {

        if (!isAllowed(static::$module, "edit"))
            abort(403);

        $id = $request->id;
        $menu_management = Menu::find($id);

        $data = [
            'name'              => $request->name,
            // 'code'              => $request->code,
            // 'description'       => $request->description,
            // 'status'            => $request->has('status') ? 1 : 0,
            // 'slug'              => Str::slug($request->name),

        ];

        // if ($request->hasFile('image')) {
        //     $imageBefore = $menu_management->image;
        //     if (!empty($menu_management->image)) {
        //         $image_path = "./administrator/assets/media/short/" . $menu_management->image;
        //         if (File::exists($image_path)) {
        //             File::delete($image_path);
        //         }
        //     }
        //     $image = $request->file('image');
        //     $fileName  = Str::slug(strtolower($request->name)) . '.' . str_replace(' ', '',$image->getClientOriginalExtension());
        //     // $fileName  = $image->getClientOriginalName();
        //     $path = upload_path('short');
        //     $image->move($path, $fileName);
        //     $data['image'] = $fileName;
        // }

        $menu_management = Menu::where('id', $id)->update($data);
        createLog(static::$module, __FUNCTION__, $id);
        return redirect()->route('menu-management.index')->with('success', 'Data berhasil dirubah');
    }

    public function destroy(Request $request) {

        try {
            $menu = Menu::findOrFail($request->ix);
            $menu->delete();
            return response()->json($menu, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    // Sort Item
    public function storeItem(Request $request) {
        if (!isAllowed(static::$module, "add"))
            abort(403);

        $this->validate($request, [
            'menu'     => 'required',
            'label'             => 'required',
            'link'       => 'required',
        ]);

        try {

            $filename = null;
            if($request->has('image')){

                $file = $request->file('image');
                $filename = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                $folder_up = upload_path('menus');
                $file->move($folder_up, $filename);
                // Image::make($folder_up . '/' . $filename)->resize(110, 110)->save();

            }

            $status = 0;
            if (isset($request->status) && $request->status != '')
                $status = 1;

            $sort = MenuItems::getNextSortRoot($request->menu);

            $short_item = MenuItems::create([
                'menu'     => $request->menu,
                'label'             => $request->label,
                'label_an'          => $request->label_an,
                'link'              => $request->link,
                'description'       => $request->description,
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
                    $menu_management_item = MenuItems::find($item['id']);

                    $menu_management_item->update([
                        'label'             => $item['label'],
                        'label_an'          => $item['label_an'],
                        'link'              => $item['link'],
                        'description'       => $item['description'],
                        'status'            => $item['status'],

                    ]);
                }
            } else {

                $this->validate($request, [
                    'label_'.$request->index            => 'required',
                    'link_'.$request->index      => 'required',
                ]);

                $menu_management_item = MenuItems::find($request['index']);
                $index = $request->index;

                $filename = $menu_management_item->image;
                if($request->has('image_'.$index)){

                    $file = $request->file('image_'.$index);
                    $filename = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                    $folder_up = upload_path('menus');
                    $file->move($folder_up, $filename);
                  
                    $file_path = upload_path('menus', $menu_management_item->image);
                    if(File::exists($file_path)) File::delete($file_path);
                    // Image::make($folder_up . '/' . $filename)->resize(110, 110)->save();

                }

                $menu_management_item->update([

                    'label'             => $request['label_'.$index],
                    'label_an'          => $request['label_an_'.$index],
                    'link'              => $request['link_'.$index],
                    'description'       => $request['description_'.$index],
                    'description_an'    => $request['description_an_'.$index],
                    'status'            => $request['status_'.$index],
                    'image'             => $filename

                ]);
                return response()->json($menu_management_item, 200);
            }
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function generateItem(Request $request) {

        try {
            if (is_array($request->arraydata)) {
                foreach ($request->arraydata as $value) {
                    $menu_management_item = MenuItems::find($value['id']);
                    if (!empty($menu_management_item)) {
                        $menu_management_item->update([
                            'sort' => $value['sort'],
                            'parent' => $value['parent'],
                            'depth' => $value['depth'],
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
            $menu_items = MenuItems::find($request->id);
            $menu_items->delete();
            return response()->json($menu_items, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }

    public function updateOrder(Request $request) {

        $newOrder = $request->order;
        foreach ($newOrder as $index => $item) {
            $menu_management_item = Menu::find($item);

            $menu_management_item->update([
                'sort' => $index + 1,
            ]);
        }
    }

    public function changeStatus(Request $request)
    {
        $data['status'] = $request->status == "active" ? 1 : 0;
        $id = $request->ix;
        Menu::where(["id" => $id])->update($data);

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json(['message' => 'Status has changed.']);
    }

    public function isExistKode(Request $request){
        if($request->ajax()){
            $menu_management = Menu::select("*");

            if(isset($request->code)){
                $menu_management->where('code', $request->code);
            }

            if(isset($request->id)){
                $menu_management->where('id', '<>', $request->id);
            }
            $data = [ 'valid' => ( $menu_management->count() == 0)  ];
            if(!empty($menu_management)){
                return $data;
            }else{
                return $data;
            }
        }
    }

    public function isExistItemKode(Request $request){
        {
            // Mendapatkan nilai sub_label dari request
            $subTitle = $request->input('sub_label');
    
            // Lakukan pengecekan apakah sub_label sudah ada di database
            $isExist = MenuItems::where('sub_label', $subTitle)->exists();
    
            // Mengembalikan hasil pengecekan
            return response()->json(!$isExist);
        }
    }
    


}
