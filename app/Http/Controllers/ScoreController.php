<?php

namespace App\Http\Controllers;

use App\Score;
use App\TimeTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = TimeTable::where('id', 2)->get()->first();

        $end_time = new DateTime($time->end, new DateTimeZone("Asia/Jakarta"));
        $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

        $user = Auth::user();

        if (isset($user)) {

            if ($user->is_admin) {

                $score = Score::select(
                    DB::raw('SUM(nyawa) as nyawa'), 
                    DB::raw('SUM(score) as score'), 
                    DB::raw('SUM(elapsed_time) as time'), 
                    'timid',
                    'no_peserta',
                    'nama_tim')
                ->rightjoin('olim', 'olim.no_peserta', '=', 'scores.timid')
                ->where('olim.semifinal', 1)
                ->groupBy('scores.timid', 'olim.id', 'olim.no_peserta', 'olim.nama_tim')
                ->orderBy('score', 'desc')
                ->orderBy("nyawa", 'desc')
                ->orderBy("nama_tim", 'asc')
                ->get();

                return response()->json(array('score' => $score));
            }
        }

        if ($currentDate <= $end_time) {

            $score = Score::select(
                DB::raw('SUM(nyawa) as nyawa'), 
                DB::raw('SUM(score) as score'), 
                DB::raw('SUM(elapsed_time) as time'), 
                'timid',
                'no_peserta',
                'nama_tim')
            ->rightjoin('olim', 'olim.no_peserta', '=', 'scores.timid')
            ->where('olim.semifinal', 1)
            ->groupBy('scores.timid', 'olim.id', 'olim.no_peserta', 'olim.nama_tim')
            ->orderBy('score', 'desc')
            ->orderBy("nyawa", 'desc')
            ->orderBy("nama_tim", 'asc')
            ->get();

            Storage::disk('local')->put('save.txt', $score); //save to file for freeze
            return response()->json(array('score' => $score));

        } else {
            $tempScore = Storage::disk('local')->get('save.txt');
            $score = json_decode($tempScore, true);

            return response()->json(array('score' => $score, 'status' => "FREEZE"));
        }

    }

    /**
     * Display a listing of the specific resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_req($posNumber)
    {
        $score = Score::select(
            DB::raw('SUM(nyawa) as nyawa'), 
            DB::raw('SUM(score) as score'), 
            'timid',
            'no_peserta',
            'elapsed_time',
            'nama_tim')
        ->join('olim', 'olim.no_peserta', '=', 'scores.timid')
        ->groupBy('scores.timid', 'scores.elapsed_time', 'olim.id')
        ->where('pos', $posNumber)
        ->orderBy('elapsed_time', 'asc')
        ->get();

        return response()->json(array('score' => $score));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tempItem = Score::where("timid", $request->no_peserta)
        ->where("pos", $request->pos)
        ->get();

        if (!isset($tempItem->score)) {

            $item = new Score;
            $item->timid = $request->no_peserta;
            $item->pos = $request->pos;
            $item->score = $request->score;
            $item->nyawa = $request->nyawa;
            $item->elapsed_time = $request->elapsed_time;

            $item->save();

            return response()->json(array('status' => "OK"));
        } else {

            Score::where('timid', $request->no_peserta)
            ->where("pos", $request->pos)
            ->update([
                "score" => $request->score,
                "nyawa" => $request->nyawa,
                "elapsed_time" => $request->elapsed_time
            ]);

            return response()->json(array('status' => "OK"));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(score $score)
    {
        //
    }
}
