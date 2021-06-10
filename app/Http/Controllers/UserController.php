<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Laracsv\Export;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function getVerified()
    {
        $data = User::get();

        return view ('admin.user', ['data' => $data]);
    }

    //download CSV
    public function download()
    {
        $data = User::get();
        $csv = new Export();
        $csv->build($data, [
            'id',
            'name',
            'email',
            'daftar',
            ])->download('user'.date('Y-m-d').'.csv');
    }

}
