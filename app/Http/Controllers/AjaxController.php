<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Soal;
use App\UserAnswer;

class AjaxController extends Controller {
   public function index(Request $request){
      $feedback =
      '<div class="container">
            <div class="row align-items-center text-center" style="height: 600px;">
                <div class="col-lg-12 animated zoomIn" style="animation-duration: 0.75s;">
                    <i class="far fa-thumbs-up" style="font-size: 125px;"></i>
                        <br>
                        <br>
                        <br>
                        <span>Selamat! Jawaban Anda Benar</span>
                </div>
            </div>
        </div>';
        $jawaban_salah='Maaf Jawaban Anda Kurang Tepat, Silahkan Mencoba Kembali';

        $jawaban= $request->input('jawaban-olim');
        $userId = Auth::user()->id;
        $soalId = $request->id;

        //check if user answer is correct or not
        $correct = Soal::select('id')
        ->where("id", $soalId)
        ->where('answer', $jawaban)
        ->get()->first();

        $tries = UserAnswer::where('userid', $userId)
        ->where('soalid', $soalId)
        ->get()->first();

        //updating user_answers table sesuai sama requirement acara
        UserAnswer::join('soals', 'soals.id' ,'=', 'user_answers.soalid')
        ->where('userid', $userId)
        ->where('soalid', $soalId)
        ->update([
            'last_answer' => $jawaban,
            'correct' => isset($correct),
            'tries' => $tries->tries+1,
        ]);

        if(isset($correct)){
            return response()->json(array('feedback'=> $feedback));
        }
        else{
            return response()->json(array('jawaban_salah'=>$jawaban_salah));        }
   }
}
