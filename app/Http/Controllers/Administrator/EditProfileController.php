<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\User;
use DataTables;
use Image;
use File;
use DB;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    private static $module = "users";

    public function edit($id)
    {
        
        $edit = User::find($id);
        if (!$edit) {
            return abort(404);
        }
        $user_edit= User::where( 'id', auth()->user()->id )->get();
        return view("administrator.edit_profile.edit", compact("user_edit", "edit"));
    }

    public function update(Request $request)
    {
        $data = [
            'name'              => $request->name,
            'email'             => $request->email,
        ];

        // if($request->has('password') && $request->password != ""){
        //     $data['password'] = Hash::make($request->password);
        // }

        $id = $request->id;
        $user = User::find($id);

        User::where('id', $id)->update($data);
        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect(route('admin.dashboard'));
    }
    public function editPassword($id)
    {
        
        $edit = User::find($id);
        if (!$edit) {
            return abort(404);
        }
        $user_edit= User::where( 'id', auth()->user()->id )->get();
        return view("administrator.edit_profile.change", compact("user_edit", "edit"));
    }

    public function updatePassword(Request $request)
    {
        // $data = [
        //     'name'              => $request->name,
        //     'email'             => $request->email,
        // ];

        if($request->has('password') && $request->password != ""){
            $data['password'] = Hash::make($request->password);
        }

        $id = $request->id;
        $user = User::find($id);

        User::where('id', $id)->update($data);
        //Write log
        createLog(static::$module, __FUNCTION__, $id);
        return redirect(route('admin.dashboard'));
    }
}
