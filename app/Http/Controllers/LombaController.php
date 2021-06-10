<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    //
    public function signup(Request $request)
    {
        if ($request->type == 'olim') {
            echo 'pass';
            OlimController::insertData($request);
             return redirect()->action(
                'OlimController@insertData', [$request]
            ); 
        }
    }
    
    public function update(Request $request)
    {
        if ($request->type == 'olim') {
            return redirect()->action(
                'OlimController@updateData', [$request]
            );
        }
    }


    public function upload(Request $request)
    {
        if ($request->type == 'olim') {
            return redirect()->action(
                'OlimController@uploadOlim', [$request]
            );
        }
    }

    public function submit(Request $request)
    {
        if ($request->type == 'olim') {
            return redirect()->action(
                'OlimController@submit', [$request]
            );
        }
    }
}
