<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use App\Models\Post;
use DataTables;
use Image;
use File;
use DB;
use Validator;

class NewsController extends Controller
{
    private static $module = "article";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
        return view("administrator.article.index");
    }

    public function getData(Request $request)
    {
        $query = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
            ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id');

        if ($request->status != "") {
            $status = $request->status == "active" ? 1 : 0;
            $data = $query->where("posts.status", $status)->get();
        } else {
            $data = $query->get();
        }

        return DataTables::of($data)
            ->addColumn('name_package', function ($row) {
                $name_package = '<div class="d-flex align-items-center"><div class="symbol symbol-50px"><span class="symbol-label" style="background-image:url(' . img_src($row->data_file, "news") . ');"></span></div><div class="ms-5">'.$row->title.'</div></div>';
                return $name_package;
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
                if(isAllowed(static::$module, "edit"))://Check permission
                $btn .= '<a href="' . route('admin.article.edit', $row->id) . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
            })->rawColumns(['name_package', 'status', 'action'])->make(true);
    }

    public function add()
    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }
        $categories = PostCategory::where("post_categories.status", 1)->get();
        return view("administrator.article.add", compact("categories"));
    }

    public function save(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "add")) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $validator = Validator::make($request->all(), [
            'image' => 'max:5120',
        ], [
            'image.max' => 'please upload file less than 5mb',
        ]);

        
        if($request->has('icon')){
            $file = $request->file('icon');

            $file_name1 = str_replace(' ', '', time()."_".$file->getClientOriginalName());

            $folder_up = upload_path('icon');
            $file->move($folder_up,$file_name1);
        }else{
            $file_name1 = null;
        }
 

        $data = [
            'post_category_id'  => $request->category,
            'tanggal'           => date('Y-m-d', strtotime($request->tanggal)),
            'title'             => $request->title,
            'flag'              => $request->flag,
            'url_media'         => $request->url_media,
            'description'       => $request->description,
            'same_as_default'   => $request->has('same_as_default') ? 1 : 0,
            'title_an'          => $request->title_an,
            'description_an'    => $request->description_an,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'status'            => $request->has('status') ? 1 : 0,
            'slug'              => Str::slug($request->title),
            'icon'              => $file_name1

        ];
      
        if ($request->plan == "upload") {

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $fileName  = Str::slug(strtolower($request->title)) . '.' . str_replace(' ', '',$image->getClientOriginalExtension());
                // $fileName  = $image->getClientOriginalName();
                $path = upload_path('news');
                $image->move($path, $fileName);
                $data['data_file'] = $fileName;
            }

        // if ($request->plan == "upload") {
        //     if ($request->hasFile('image')) {
        //         $image = $request->file('image');
        //         $fileName = Str::slug(strtolower($request->title)) . '.' . $image->getClientOriginalExtension();
        //         $path = upload_path('news');
        //         $image->move($path, $fileName);
        
        //         // Check if the uploaded file is a video
        //         $allowedExtensions = ['mp4', 'mov', 'avi']; // Add more video extensions if needed
        //         $extension = $image->getClientOriginalExtension();
        //         if (in_array($extension, $allowedExtensions)) {
        //             // Video file, no need to resize
        //             $data['data_file'] = $fileName;
        //         } else {
        //             // Non-video file, resize image using Intervention Image
        //             Image::make($path . '/' . $fileName)->resize(690, 380)->save();
        //             $data['data_file'] = $fileName;
        //         }
        //     }

        } else if ($request->plan == "embed") {
            $media = $request->media_link;
			$media != '' ? $link = parse_url($media) : $link = explode("=", 'media=flase');
            if(isset($link['query'])){
                $link_embeded = parse_str($link['query'], $output);
                if(isset($output["v"])){
                    $data['data_file'] = $output["v"];
                }else{
                    $str = $request->media_link;
                    $data['data_file'] = trim($str,"https://youtube.com/shorts/?feature=share");
                }
            }else{
                return back()->with(['error' => 'Link embed youtube salah!']);
            }
        }

        // return $data;
        $post = Post::create($data);

        //Write log
        createLog(static::$module, __FUNCTION__, $post->id);
        return redirect(route('admin.article'));
    }

    public function detail($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "detail")) {
            abort(403);
        }
        $detail = Post::select(DB::raw('posts.*, post_categories.name as post_category_name'))
        ->leftJoin(DB::raw('post_categories'), 'post_categories.id', '=', 'posts.post_category_id')
        ->get();

        return view('administrator.article.detail',compact("detail"));
    }

    public function edit($id)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $edit = Post::find($id);
        if (!$edit) {
            return abort(404);
        }
        $categories = PostCategory::where("post_categories.status", 1)->get();
        return view("administrator.article.edit", compact("categories", "edit"));
    }

    public function update(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "edit")) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required',
        ]);
        
        $validator = Validator::make($request->all(), [
            'image' => 'max:5120',
        ], [
            'image.max' => 'please upload file less than 5mb',
        ]);

        // dd($validator->customMessages['image.max']);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $id = $request->id;
        $post = Post::find($id);       
        $data = [
            'post_category_id'  => $request->category,
            'tanggal'           => date('Y-m-d', strtotime($request->tanggal)),
            'title'             => $request->title,
            'flag'             => $request->flag,
            'url_media'         => $request->url_media,
            'description'       => $request->description,
            'same_as_default'   => $request->has('same_as_default') ? 1 : 0,
            'title_an'          => $request->title_an,
            'description_an'    => $request->description_an,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'status'            => $request->has('status') ? 1 : 0,
            'slug'              => Str::slug($request->title),

        ];
        if ($request->hasFile('icon')) {
            $imageBefore = $post->icon;
            if (!empty($post->icon)) {
                $image_path = "./administrator/assets/media/icon/" . $post->icon;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $icon = $request->file('icon');
            $file_name1  = $icon->getClientOriginalName();
            $path = upload_path('icon');
            $icon->move($path, $file_name1);
            $data['icon'] = $file_name1;
        }

        if ($request->plan == "upload") {

        #---------- Upload an Image ----------
            if ($request->hasFile('image')) {
                $imageBefore = $post->data_file;
                if (!empty($post->data_file)) {
                    $image_path = "./administrator/assets/media/news/" . $post->data_file;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
                $image = $request->file('image');
                $fileName  = Str::slug(strtolower($request->title)) . '.' . str_replace(' ', '',$image->getClientOriginalExtension());
                // $fileName  = $image->getClientOriginalName();
                $path = upload_path('news');
                $image->move($path, $fileName);
                $data['data_file'] = $fileName;
            }

        // if ($request->plan == "upload") {
        //     if ($request->hasFile('image')) {
        //         $image = $request->file('image');
        //         $fileName  = Str::slug(strtolower($request->title)) . '.' .  str_replace(' ', '',$image->getClientOriginalExtension());
        //         $path = upload_path('news');
        //         $image->move($path, $fileName);
        //         // Check if the uploaded file is a video
        //         $allowedExtensions = ['mp4', 'mov', 'avi']; // Add more video extensions if needed
        //         $extension = $image->getClientOriginalExtension();
        //         if (in_array($extension, $allowedExtensions)) {
        //             // Video file, no need to resize
        //             $data['data_file'] = $fileName;
        //         } else {
        //             // Non-video file, resize image using Intervention Image
        //             Image::make($path . '/' . $fileName)->resize(690, 380)->save();
        //             $data['data_file'] = $fileName;
        //         }
        //     }

        } else if ($request->plan == "embed") {
            $media = $request->media_link;
			$media != '' ? $link = parse_url($media) : $link = explode("=", 'media=flase');
            if(isset($link['query'])){
                $link_embeded = parse_str($link['query'], $output);
                if(isset($output["v"])){
                    $data['data_file'] = $output["v"];
                }else{
                    $str = $request->media_link;
                    $data['data_file'] = trim($str,"https://youtube.com/shorts/?feature=share");
                }
            }else{
                return back()->with(['error' => 'Link embed youtube salah!']);
            }
        }

        
        $post = Post::where('id', $id)->update($data);
        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect(route('admin.article'));
    }

    public function delete(Request $request)
    {
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }
        $id = $request->ix;
        $post = Post::find($id);
        if (!empty($post->data_file)) {
            $image_path = "./administrator/assets/media/news/" . $post->data_file;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $data = Post::destroy($request->ix);
        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return response()->json($data);
    }

    public function changeStatus(Request $request)
    {
        $data['status'] = $request->status == "active" ? 1 : 0;
        $id = $request->ix;
        Post::where(["id" => $id])->update($data);

        //Write log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json(['message' => 'Status has changed.']);
    }

    public function short()
    {
        //Check permission
        if (!isAllowed(static::$module, "sort")) {
            abort(403);
        }
        $post = Post::where("posts.status", 1)
        ->orderBy('short', 'ASC')->get();
        return view("administrator.article.short", compact("post"));
    }

    public function updateShort(Request $request)
    {

        // dd($request);
        //Check permission
        if (!isAllowed(static::$module, "sort")) {
            abort(403);
        }

        $items = $request->service;
                foreach ($items as $item) {
                    $short_list_item = Post::find($item['id']);

                    $short_list_item->update([
                        'short'             => $item['short'],
                    ]);
                }
        //Write log
        // createLog(static::$module, __FUNCTION__, $id);
        return redirect(route('admin.article.short'));
    }

}
