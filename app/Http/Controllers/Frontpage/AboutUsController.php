<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShortList;
use RealRashid\SweetAlert\Facades\Alert;

class AboutUsController extends Controller
{

    public function index() {
        return response()->json('INI HALAMAN INDEX', 200);
    }

    public function list(Request $request, $slug) {

        try {
            $data = ShortList::with('list_items')->where('slug', $slug)->first();

            if (!empty($data))
                return view('frontpage.about_us.list', compact('data'));

            return redirect()->route('home');
            Alert::toast('Halaman '.$slug.' telah dihapus', 'error');

        } catch (\Throwable $th) {
            return redirect()->route('home');
            Alert::toast($th->getMessage(), 'error');
        }

    }

}
