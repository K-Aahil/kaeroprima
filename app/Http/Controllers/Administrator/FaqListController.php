<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Models\FaqList;
use App\Models\FaqListItem;
use Illuminate\Support\Facades\Storage;
use File;
use Image;

class FaqListController extends Controller
{

    private static $module = "faq_list";

    // Sort Parent
    public function index() {
        return view('administrator.faq_list.index');
    }

    public function getData(Request $request) {
        $data = faqList::get();
        return Datatables::of($data)
        ->addColumn('action', function($row){
            $btn = "";
            if (!isAllowed(static::$module, "view"))
            abort(403);
            $btn .= '<a href="'.route('faq-list.detail','faq_list_id='.$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                    </svg>
                </span>
            </a>';
            // endif;
            // if(isAllowed(static::$module, "edit")):
            // $btn .= '<a href="'.route('faq-list.edit',$row->id).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
            //     <span class="svg-icon svg-icon-3">
            //         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            //             <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
            //             <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
            //         </svg>
            //     </span>
            // </a>';
            // endif;
            // if(isAllowed(static::$module, "delete")):
            // $btn .= '<a href="#" data-ix="' . $row->id . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete">
            //     <span class="svg-icon svg-icon-3">
            //         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            //             <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
            //             <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
            //             <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
            //         </svg>
            //     </span>
            // </a>';
            // endif;
            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function create() {

        // if (!isAllowed(static::$module, "add"))
        //     abort(403);

        return view('administrator.faq_list.add');
    }

    public function store(Request $request) {

        // if (!isAllowed(static::$module, "add"))
        //     abort(403);

        try {
            $this->validate($request,[ 'name' => 'required' ]);
            $status = 1 ;

            if(!$request->has('status'))
                $status = 0;

            $faq_list = FaqList::create([
                'name' => $request->name,
                'slug' => strtolower($request->name)
            ]);
            
            createLog(static::$module, __FUNCTION__, $faq_list->id);
            return redirect()->route('faq-list.index')->with('success', $request->name.' berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('faq-list.index')->with('error', 'Terjadi kesalahan. Tidak dapat menambahkan data Sort Item.');
        }
    }

    public function show(Request $request) {

        if (!isAllowed(static::$module, "view"))
            abort(403);

        try {
            if(!isset($request->faq_list_id))
                return redirect()->route('faq-list.index')->with('error', 'Menu tidak tersedia atau telah dihapus');

            $id = $request->faq_list_id;
            $data = FaqList::with('list_items')->find($id);
            if(empty($data))
                return redirect()->route('faq-list.index')->with('error', 'Menu tidak tersedia atau telah dihapus');

            return view('administrator.faq_list.detail', compact('data', 'id'));
        } catch (\Throwable $th) {
            return redirect()->route('faq-list.index')->with('error', 'Terjadi kesalahan. Tidak dapat menampilkan data Sort Item.');
        }
    }

    public function edit($id) {

        // if (!isAllowed(static::$module, "edit"))
        //     abort(403);

        try {
            $data = FaqList::find($id);
            return view('administrator.faq_list.edit', compact('data'));
        } catch (\Throwable $th) {
            return redirect()->route('faq-list.index')->with('error', 'Terjadi kesalahan. Tidak dapat menampilkan data Sort Item.');
        }
    }

    public function update(Request $request, $id) {

        // if (!isAllowed(static::$module, "edit"))
        //     abort(403);

        try {
            $this->validate($request,[ 'name' => 'required' ]);

            $data = FaqList::find($id);
            $data->update([
                'name' => $request->name,
                'slug' => strtolower($request->name)
            ]);

            createLog(static::$module, __FUNCTION__, $id);
            return redirect()->route('faq-list.index')->with('success', 'Data berhasil dirubah');
        } catch (\Throwable $th) {
            return redirect()->route('faq-list.index')->with('error', 'Terjadi kesalahan. Tidak dapat mengubah data Sort Item.');
        }
    }

    public function destroy(Request $request) {

        try {
            $faq = FaqList::findOrFail($request->ix);
            $faq->delete();
            return response()->json($faq, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    // Sort Item
    public function storeItem(Request $request) {
        if (!isAllowed(static::$module, "add"))
            abort(403);

        $this->validate($request, [
            'faq_list_id'     => 'required',
            'title'             => 'required',
            // 'sub_title'         => 'required',
            'description'       => 'required',
        ]);

        try {

            $filename = null;
            if($request->has('image')){

                $file = $request->file('image');
                $filename = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                $folder_up = upload_path('faq_items');
                $file->move($folder_up, $filename);

            }

            $status = 0;
            if (isset($request->status) && $request->status != '')
                $status = 1;

            $sort = FaqListItem::getNextSortRoot($request->faq_list_id);
            
            $faq_item = FaqListItem::create([
                'faq_list_id'  => $request->faq_list_id,
                'title'             => $request->title,
                'title_an'          => $request->title_an,
                // 'sub_title'         => $request->sub_title,
                // 'sub_title_an'      => $request->sub_title_an,
                'description'       => $request->description,
                'description_an'    => $request->description_an,
                'url'               => $request->url,
                'status'            => $status,
                'sort'              => $sort,
                'image'             => $filename

            ]);
            
            return response()->json($faq_item, 200);
            
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
                    $faq_list_item = FaqListItem::find($item['id']);

                    $faq_list_item->update([
                        'title'             => $item['title'],
                        'title_an'          => $item['title_an'],
                        // 'sub_title'         => $item['sub_title'],
                        // 'sub_title_an'      => $item['sub_title_an'],
                        'description'       => $item['description'],
                        'description_an'    => $item['description_an'],
                        'url'               => $item['url'],

                    ]);
                }
            } else {

                $this->validate($request, [
                    'title_'.$request->index            => 'required',
                    // 'sub_title_'.$request->index        => 'required',
                    'description_'.$request->index      => 'required',
                ]);

                $faq_list_item = FaqListItem::find($request['index']);
                $index = $request->index;

                $filename = $faq_list_item->image;
                if($request->has('image_'.$index)){

                    $file = $request->file('image_'.$index);
                    $filename = str_replace(' ', '', time()."_".$file->getClientOriginalName());
                    $folder_up = upload_path('faq_items');
                    $file->move($folder_up, $filename);

                    $file_path = upload_path('faq_items', $faq_list_item->image);
                    if(File::exists($file_path)) File::delete($file_path);

                }

                $faq_list_item->update([

                    'title'             => $request['title_'.$index],
                    'title_an'          => $request['title_an_'.$index],
                    // 'sub_title'         => $request['sub_title_'.$index],
                    // 'sub_title_an'      => $request['sub_title_an_'.$index],
                    'description'       => $request['description_'.$index],
                    'description_an'    => $request['description_an_'.$index],
                    'url'               => $request['url_'.$index],
                    'image'             => $filename

                ]);
                return response()->json($faq_list_item, 200);
            }
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function generateItem(Request $request) {

        try {
            if (is_array($request->arraydata)) {
                foreach ($request->arraydata as $value) {
                    $faq_list_item = FaqListItem::find($value['id']);
                    if (!empty($faq_list_item)) {
                        $faq_list_item->update([
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
            $faq_item = FaqListItem::find($request->id);
            $faq_item->delete();
            return response()->json($faq_item, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }

}
