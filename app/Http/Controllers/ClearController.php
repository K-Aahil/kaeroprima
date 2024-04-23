<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class ClearController extends Controller {

    public function clearOptimize() {

        try {
            Artisan::call('optimize:clear');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);

        }
    }

    public function clearConfig() {

        try {
            Artisan::call('config:clear');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);

        }
    }

    public function clearCache() {

        try {
            Artisan::call('cache:clear');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);

        }
    }

    public function migrate() {

        try {
            Artisan::call('migrate');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);

        }
    }

    public function migrateFresh() {

        try {
            Artisan::call('migrate:fresh');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);

        }
    }

    public function seeder() {
        try {
            Artisan::call('db:seed');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);

        }

    }

    public function storageLink() {
        try {
            Artisan::call('storage:link');
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);
        }
    }


}
