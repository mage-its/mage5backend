<?php

namespace App\Http\Controllers;

use App\UserAnswer;
use Laracsv\Export;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Soal;
use App\User;
use App\Olim;
use App\TimeTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DateTimeZone;

class UserAnswerController extends Controller
{

    private $end_time;
    /**
     * generate soal - soal yang didapat oleh peserta
     * secara random
     * @return \Illuminate\Http\Response
     */
    public function generate()
    {
        $maxSoal = 20; //maximum soal per peserta
        $jumlahEasy = 5; //maximum soal easy per bidang
        $soal=['program','fisika', 'logika']; //bidang soal yang ada
        $listUser = User::where('daftar', 'olim')->get(); //get all user yang daftar olim

        $userSoal = UserAnswer::get()->first();

        if (!isset($userSoal)) {

            foreach($listUser as $user) {

                foreach ($soal as $tipeSoal) {

                    //ambil random item secara random sesuai $jumlahEasy buat soal easy
                    $easySoal = Soal::inRandomOrder()
                        ->where('difficulty','easy')
                        ->where('jenis_soal', $tipeSoal)
                        ->limit($maxSoal - ($maxSoal-$jumlahEasy))->get();

                    /**
                     * ambil random item secara random berjumlah $maxSoal - $jumlahEasy
                     * buat normal
                     */
                    $normalSoal = Soal::inRandomOrder()
                        ->where('difficulty','normal')
                        ->where('jenis_soal', $tipeSoal)
                        ->limit($maxSoal - $jumlahEasy)->get();

                    $tempSoal = $easySoal->merge($normalSoal); //combine $easySoal dan $normalSoal
                    $this->insertDB($tempSoal, $user->id);
                }
            }

            echo "GENERATE SUCCESS";
        }
        else {
            echo "SKIP, GENERATE SUDAH DILAKUKAN";
        }
    }

    /**
     * memasukkan hasil random soal ke dalam DB UserAnswer
     * @return void
     */
    public function insertDB($tempSoal, $userId)
    {
        $no_soal = 1; //no soal saat ini
        foreach($tempSoal as $item) {
            $Soal = new UserAnswer;

            //soal easy di unlock pertama kali
            if ($item->difficulty == 'easy') {
                $Soal->lock=false;
            }

            //masukkin data ke table userAnswer
            $Soal->no_soal = $no_soal;
            $Soal->userid =  $userId;
            $Soal->soalid = $item->id;

            $Soal->save();

            $no_soal += 1; //add no soal
        }
    }

    /**
     * menetukan soal yang mana yang terbuka saat jawaban user benar
     * RASI 1
     */
    public function onCorrectRasi1($noSoal) {
        $openSoal = [];
        switch($noSoal) {
            case 1: array_push($openSoal, 6, 9, 13); break;
            case 2: array_push($openSoal, 10, 11); break;
            case 3: array_push($openSoal, 15, 16); break;
            case 4: array_push($openSoal, 17); break;
            case 5: array_push($openSoal, 20); break;
            case 6: array_push($openSoal, 1, 7); break;
            case 7: array_push($openSoal, 6); break;
            case 8: array_push($openSoal, 10); break;
            case 9: array_push($openSoal, 1, 11); break;
            case 10: array_push($openSoal, 2, 8); break;
            case 11: array_push($openSoal, 2, 9, 12); break;
            case 12: array_push($openSoal, 11, 16); break;
            case 13: array_push($openSoal, 1, 14); break;
            case 14: array_push($openSoal, 13, 15); break;
            case 15: array_push($openSoal, 3, 14, 20); break;
            case 16: array_push($openSoal, 3, 12, 17, 18); break;
            case 17: array_push($openSoal, 4, 16); break;
            case 18: array_push($openSoal, 16, 19); break;
            case 19: array_push($openSoal, 18, 20); break;
            case 20: array_push($openSoal, 5, 15, 19); break;
        }

        $this->updateLock($openSoal, "fisika");
    }

    /**
     * menetukan soal yang mana yang terbuka saat jawaban user benar
     * RASI 2
     */
    public function onCorrectRasi2($noSoal) {
        $openSoal = [];
        switch($noSoal) {
            case 1: array_push($openSoal, 7, 8, 10); break;
            case 2: array_push($openSoal, 10, 11, 12); break;
            case 3: array_push($openSoal, 12, 14, 15, 18); break;
            case 4: array_push($openSoal, 15, 16); break;
            case 5: array_push($openSoal, 17, 18, 19); break;
            case 6: array_push($openSoal, 7); break;
            case 7: array_push($openSoal, 1, 6); break;
            case 8: array_push($openSoal, 1, 9); break;
            case 9: array_push($openSoal, 8, 11); break;
            case 10: array_push($openSoal, 1, 2); break;
            case 11: array_push($openSoal, 2, 9); break;
            case 12: array_push($openSoal, 2, 3); break;
            case 13: array_push($openSoal, 14); break;
            case 14: array_push($openSoal, 3, 13); break;
            case 15: array_push($openSoal, 3, 4); break;
            case 16: array_push($openSoal, 4, 17); break;
            case 17: array_push($openSoal, 5, 16); break;
            case 18: array_push($openSoal, 3, 5); break;
            case 19: array_push($openSoal, 5, 20); break;
            case 20: array_push($openSoal, 19); break;
        }
        $this->updateLock($openSoal, "program");
    }


    /**
     * menetukan soal yacomparing datetime phpng mana yang terbuka saat jawaban user benar
     * RASI 3
     */
    public function onCorrectRasi3($noSoal) {
      $openSoal = [];
      switch($noSoal) {
          case 1: array_push($openSoal, 6, 7); break;
          case 2: array_push($openSoal, 8, 11, 12, 14); break;
          case 3: array_push($openSoal, 9, 10); break;
          case 4: array_push($openSoal, 14, 15, 17); break;
          case 5: array_push($openSoal, 18, 19); break;
          case 6: array_push($openSoal, 1); break;
          case 7: array_push($openSoal, 1, 8); break;
          case 8: array_push($openSoal, 2, 7); break;
          case 9: array_push($openSoal, 3); break;
          case 10: array_push($openSoal, 3, 11); break;
          case 11: array_push($openSoal, 2, 10); break;
          case 12: array_push($openSoal, 2, 13); break;
          case 13: array_push($openSoal, 12); break;
          case 14: array_push($openSoal, 2, 4); break;
          case 15: array_push($openSoal, 4, 16); break;
          case 16: array_push($openSoal, 15); break;
          case 17: array_push($openSoal, 4, 18); break;
          case 18: array_push($openSoal, 5, 17); break;
          case 19: array_push($openSoal, 5, 20); break;
          case 20: array_push($openSoal, 19); break;
      }
        $this->updateLock($openSoal, "logika");
    }

    /**
     * Update status terkunci atau tidak dari soal yang telah dijawab
     * NOTE: hanya untuk dipanggil lewat fungsi onCorrectRasix($noSoal)
     */
    public function updateLock($openSoal, $bidang) {
        $userId = Auth::user()->id;

        foreach($openSoal as $noSoal) {
            UserAnswer::join('soals','soals.id', '=', 'user_answers.soalid')
            ->where('soals.jenis_soal', $bidang)
            ->where('userid', $userId)
            ->where('no_soal', $noSoal)
            ->update([
                'lock' => false,
            ]);
        }
    }


    /**
    * ambil 1 soal yang dimiliki oleh suatu user
    * @return view
    */
    public function index($userSoalID)
    {
        $userId = Auth::user()->id; //get userId

        $time = TimeTable::get()->first();

        $score = 10;
        $score *= UserAnswer::where('userid', $userId)
        ->where('correct', 1)
        ->count();

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $begin_time) {
            return redirect('/begin');
        } else if ($currentDate >= $end_time) {
            return redirect('/end');
        } else {
            $result = Soal::select('soal', 'image', 'user_answers.no_soal', 'soals.id', 'jenis_soal')
                ->join('user_answers', 'user_answers.soalid', '=', 'soals.id')
                ->where('user_answers.id', $userSoalID)
                ->where('user_answers.userid', $userId)
                ->where('user_answers.lock', false)
                ->get();

            return view('olim-soal', [
                'soal' => $result[0],
                'score' => $score,
                'currentTime' => $currentDate->format('Y-m-d H:i:s'),
                'endTime' => $end_time->format('Y-m-d H:i:s')
            ]);
        }
    }

    /**
    * ngirim time aja
    * @return view
    */
    public function mapView()
    {
        $userId = Auth::user()->id; //get userId

        $score = 10;
        $score *= UserAnswer::where('userid', $userId)
        ->where('correct', 1)
        ->count();

        $time = TimeTable::get()->first();

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $begin_time) {
            return redirect('/begin');
        } else if ($currentDate >= $end_time) {
            return redirect('/end');
        } else {
            return view('map-soal', [
              'score' => $score,
              'currentTime' => $currentDate->format('Y-m-d H:i:s'),
              'endTime' => $end_time->format('Y-m-d H:i:s')
            ]);
        }
    }

    /**
    * ngirim time aja
    * @return view
    */
    public function introView()
    {
        $userId = Auth::user()->id; //get userId

        $time = TimeTable::get()->first();

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $begin_time) {
            return redirect('/begin');
        } else if ($currentDate >= $end_time) {
            return redirect('/end');
        } else {
            return view('intro', [
              'currentTime' => $currentDate->format('Y-m-d H:i:s'),
              'endTime' => $end_time->format('Y-m-d H:i:s')
            ]);
        }
    }

    /**
    * ngirim time aja
    * @return view
    */
    public function beginView()
    {
        $userId = Auth::user()->id; //get userId

        $time = TimeTable::get()->first();

        echo $time;

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $begin_time) {
            return view('begin', [
              'currentTime' => $currentDate->format('Y-m-d H:i:s'),
              'endTime' => $begin_time->format('Y-m-d H:i:s')
            ]);
        } else if ($currentDate >= $end_time) {
            return redirect('/end');
        } else {
            return redirect('/intro');
        }
    }

    /**
    * ngirim time aja
    * @return view
    */
    public function endView()
    {
        $userId = Auth::user()->id; //get userId

        $time = TimeTable::get()->first();

        $score = 10;
        $score *= UserAnswer::where('userid', $userId)
        ->where('correct', 1)
        ->count();

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $begin_time) {
          return redirect('/intro');
        } else if ($currentDate >= $end_time) {
            return view('end', [
              'score' => $score,
              'currentTime' => $currentDate->format('Y-m-d H:i:s'),
              'endTime' => $end_time->format('Y-m-d H:i:s')
            ]);
        } else {
          return redirect('/intro');
        }
    }

    /**
     * Ambil list soal berdasarkan jenis_soal yang dimiliki oleh user
     * @param $jenis_soal digunakan untuk mengambil jenis soal tertentu (fisika, logika, programming)
     * @return view
     */
    public function indexSoal($jenis_soal) {

        $userId = Auth::user()->id; //get authenticated user id

        $result = UserAnswer::select('no_soal', 'correct', 'lock', 'user_answers.id')
        ->join('soals', 'soals.id' ,'=', 'user_answers.soalid')
        ->where('userid', $userId)
        ->where('soals.jenis_soal', $jenis_soal)
        ->get();

        $score = 10;
        $score *= UserAnswer::where('userid', $userId)
        ->where('correct', 1)
        ->count();

        $time = TimeTable::get()->first();

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $begin_time) {
            return redirect('/begin');
        } else if ($currentDate >= $end_time) {
            return redirect('/end');
        } else {
            switch($jenis_soal) {
                case "fisika" : return view('rasi1', [
                    'node' => $result,
                    'score' => $score,
                    'endTime' => $end_time->format('Y-m-d H:i:s'),
                    'currentTime' => $currentDate->format('Y-m-d H:i:s'),
                    ]); break;

                case "program" : return view('rasi2', [
                    'node' => $result,
                    'score' => $score,
                    'endTime' => $end_time->format('Y-m-d H:i:s'),
                    'currentTime' => $currentDate->format('Y-m-d H:i:s'),
                    ]); break;

                case "logika" : return view('rasi3', [
                    'node' => $result,
                    'score' => $score,
                    'currentTime' => $currentDate->format('Y-m-d H:i:s'),
                    'endTime' => $end_time->format('Y-m-d H:i:s')
                    ]); break;
                default: abort(404, "Jenis Soal not found"); break;
            }
        }
    }

   public function Check(Request $request){
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

        $jawaban= $request->input('jawaban-olim');
        $userId = Auth::user()->id;
        $soalId = $request->id;

        $time = TimeTable::get()->first();

        $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        if ($currentDate <= $end_time && $currentDate >= $begin_time) {

            //check if user answer is correct or not
            $soal = Soal::select('id', 'jenis_soal')
            ->where("id", $soalId)
            ->where('answer', $jawaban)
            ->get()->first();

            //ambil berapa kali tries user dalam 1 soal yang di jawab
            $tries = UserAnswer::where('userid', $userId) 
            ->where('soalid', $soalId)
            ->get()->first();

            $tries->tries = $tries->tries + 1;
            //updating user_answers table sesuai sama requirement acara
            UserAnswer::where('userid', $userId)
            ->where('soalid', $soalId)
            ->update([
                'last_answer' => $jawaban,
                'correct' => isset($soal),
                'tries' => $tries->tries,
            ]);

            $jawaban_salah='Jawaban Salah, '.$tries->tries.' kali percobaan';

            //jika jawaban benar
            if(isset($soal)){
                $feedback_redirect = $soal->jenis_soal;
                switch($soal->jenis_soal) {
                    case "fisika" : $this->onCorrectRasi1($tries->no_soal); break;
                    case "program" : $this->onCorrectRasi2($tries->no_soal); break;
                    case "logika" : $this->onCorrectRasi3($tries->no_soal); break;
                }
                return response()->json(array('feedback'=> $feedback, 'feedback_redirect'=> $feedback_redirect));
            }
            else{
                return response()->json(array('jawaban_salah'=>$jawaban_salah));        }
        }
        else {
            $feedback =
            '<div class="container">
                    <div class="row align-items-center text-center" style="height: 600px;">
                        <div class="col-lg-12 animated zoomIn" style="animation-duration: 0.75s;">
                                <span>Waktu Habis</span>
                        </div>
                    </div>
                </div>';

            return response()->json(array('feedback'=> $feedback));
        }
   }

   public function ScoreIndex() {
        $score = UserAnswer::select(DB::raw('sum(tries) as jawaban_tries'), DB::raw('sum(correct) as jawaban_benar'), 'nama_tim', 'user_answers.userid', 'no_peserta','olim.id')
        ->join('olim', 'olim.userid', '=', 'user_answers.userid')
        ->groupBy('user_answers.userid', 'olim.nama_tim', 'olim.no_peserta', 'olim.id')
        ->get();

        return view('admin/daftarscore', [
            "score"=>$score
        ]);
   }

   public function ScoreDetails($userId) {
       $data = UserAnswer::select(
           'user_answers.id', 
           'jenis_soal',
           'no_soal',
           'user_answers.soalid',
           'correct',
           'tries',
           'last_answer',
           'user_answers.updated_at')
       ->join('soals', 'soals.id', '=', 'user_answers.soalid')
       ->where('userid', $userId)
       ->get();

       $userInfo = Olim::where('userid', $userId)
       ->get()->first();

       return view('admin/daftarscoredetails', ["data" => $data,'userInfo' => $userInfo]);
   }

   public function Download() {
        $score = UserAnswer::select(DB::raw('sum(tries) as jawaban_tries'), DB::raw('sum(correct) as jawaban_benar'), 'nama_tim', 'user_answers.userid', 'no_peserta','olim.id')
        ->join('olim', 'olim.userid', '=', 'user_answers.userid')
        ->groupBy('user_answers.userid', 'olim.nama_tim', 'olim.no_peserta', 'olim.id')
        ->get();

        $csv = new Export();
        $csv->build($score, [
            'id',
            'no_peserta',
            'nama_tim',
            'jawaban_tries',
            'jawaban_benar',
            ])->download('scoreolim'.date('Y-m-d').'.csv');
   }
}