<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CareerRequest;
use App\Models\CareerVisitor;
use App\Models\JobTitle;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;
use App\Mail\CareerMail;
use App\Models\Setting;
use File;

class CareerController extends Controller {

    public function careerSave(Request $request) {

        // try {
        //     $data = $request->except(['_token', '_method']);
        //     $data_job = JobTitle::select('job_titles.name as job_name')
        //     ->where('job_titles.id', $data['position_id'])->first();
        //     $contact = CareerVisitor::create($data, false);
        //     $mails = Setting::where('name', 'email_receive')->first();
        //     $mail_list = json_decode($mails->value);
        //     foreach ($mail_list as $key) {
        //         Mail::to($key->email)->send(new CareerMail($data, $data_job));
        //     }
        //     return redirect()->back()->with(['success' => 'Your data added successfully.']);
        // } catch (\Throwable $th) {
        //     return $th->getMessage();
        // }

        if($request->has('file')){
            $file = $request->file('file');

            $file_name = str_replace(' ', '', time()."_".$file->getClientOriginalName());

            $folder_up = uploads_path('careers');
            $file->move($folder_up,$file_name);
        }else{
            $file_name = null;
        }
        $request->validate([
            'firstName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $career = CareerVisitor::create([
    		'position_id' => $request->position_id,
    		'name' => $request->firstName.' '.$request->lastName,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'file' => $file_name,
    	]);
        return redirect()->back()->with(['success' => 'Your data added successfully.']);
    }

    public function redirect() {
        Alert::toast('Pesan berhasil terkirim !', 'success');
        return redirect()->back();
    }

}
