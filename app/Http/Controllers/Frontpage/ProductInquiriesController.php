<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Product;
use App\Models\ProductInquiries;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;
use App\Mail\InquiriesMail;
use App\Models\Setting;

class ProductInquiriesController extends Controller {

    public function index() {
        return view('frontpage.inquiries');
    }

    public function inquiriesSave(Request $request) {

        try {
            $data = $request->except(['_token', '_method']);
            
            $data_product = Product::select('product.name as product_name')
            ->where('product.id', $data['product_id'])->first();
            // dd($data_product);

            $inquiries = ProductInquiries::create($data, false);
            $mails = Setting::where('name', 'email_receive')->first();
            $mail_list = json_decode($mails->value);
            // $mail_array = [];
            foreach ($mail_list as $key) {
                // $mail_list [] = $key->email;
                Mail::to($key->email)->send(new InquiriesMail($data, $data_product));
            }
            // return $mail_list;
            // Mail::to('aramadhana70@gmail.com')->cc($mail_array)->send(new ContactMail($data));
            // Alert::toast('Pesan berhasil terkirim !', 'success');
            // dd(url()->full());
            // return redirect('produk-kredit')->with(['success' => 'Your data added successfully.']);
            return redirect()->back();
        } catch (\Throwable $th) {
            return $th->getMessage();
            // Alert::toast('Pesan tidak terkirim !', 'error');
            // return redirect()->route('inquiries');
        }
        
    }
    public function redirects() {
        Alert::toast('Pesan berhasil terkirim !', 'success');
        return redirect()->route('inquiries');
    }

}
