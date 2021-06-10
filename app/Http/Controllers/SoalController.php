<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Soal::get();
       return view('admin.daftarsoal', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question_soal = $request->question_soal;
        $answer = $request->answer_soal;
        $imgSoal = $request->file('image_soal');
        $difficulty = $request->difficulty_soal;
        $jenis = $request->type_soal;

        $soal = new Soal;

        if (isset($imgSoal)) {
            $lastID = Soal::orderBy("created_at", "desc")->get()->first();

            if (!isset($lastID->id)) {
                $lastID = 0;
            } else {
                $lastID = $lastID->id;
            }

            $nameImgSoal = ($lastID+1).'.'.$imgSoal->getClientOriginalExtension();
            $imgSoal->move(public_path().'/soal/', $nameImgSoal);

            $soal->image = $nameImgSoal; //insert image name to db
        }

        $soal->soal = $question_soal;
        $soal->answer = $answer;
        $soal->jenis_soal = $jenis;
        $soal->difficulty = $difficulty;

        $soal->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function destroy(Request $request)
    {
        $soalId = $request->timId;

        $result = Soal::where('id', $soalId)->get()->first();
        
        Soal::where('id', $soalId)->delete();

        if (isset($result->image)) {
            unlink(public_path().'/soal/'.$result->image);
        }


        return redirect()->back();
    }
}
