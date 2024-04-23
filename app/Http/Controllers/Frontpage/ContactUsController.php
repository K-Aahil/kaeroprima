<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use App\Models\Visitor;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;
use App\Mail\MemberMail;
use App\Models\Setting;

class ContactUsController extends Controller {

    public function index() {
        return view('frontpage.got-question');
    }

    public function gotSave(Request $request) {

        try {
            $data = $request->except(['_token', '_method']);
            //  dd($data);
            $contact = Visitor::create($data, false);
            $mails = Setting::where('name', 'email_receive')->first();
            $mail_list = json_decode($mails->value);
            // $mail_array = [];
            foreach ($mail_list as $key) {
                // $mail_list [] = $key->email;
                Mail::to($key->email)->send(new MemberMail($data));
            }
            // return $mail_list;
            // Mail::to('aramadhana70@gmail.com')->cc($mail_array)->send(new ContactMail($data));
            // Alert::toast('Pesan berhasil terkirim !', 'success');
            return redirect()->back()->with(['success' => 'Your data added successfully.']);
        } catch (\Throwable $th) {
            return $th->getMessage();
            // Alert::toast('Pesan tidak terkirim !', 'error');
            // return redirect()->route('contact-us');
        }
        
    }

    public function redirects() {
        Alert::toast('Pesan berhasil terkirim !', 'success');
        return redirect()->back();
    }

}
