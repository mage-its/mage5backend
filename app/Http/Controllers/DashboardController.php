<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Olim;
use App\TimeTable;
use App\Esports;
use App\MainComp;
use DateTime;
use DateTimeZone;

class DashboardController extends Controller
{
    public function bayarIndex ()
    {
        $user = Auth::user();
        switch($user->daftar){
            case 'olim':
                $data = Olim::where('userid', $user->id)->get()->first();
            break;
            case 'esport':
                $data = Esports::where('userid', $user->id)->get()->first();
            break;
            case 'devcom':
                $data = MainComp::where('userid', $user->id)->get()->first();
            break;
        }

        return view('user.bayar', ['user' => $user, 'data' => $data]);
    }

    public function submisiIndex ()
    {
        $user = Auth::user();
        $data = MainComp::where('userid', $user->id)->get()->first();

        return view('user.submission', ['user' => $user, 'data' => $data]);
    }

    public function rekapIndex ()
    {
        $user = Auth::user();
        switch($user->daftar){
            case 'olim':
                $data = Olim::where('userid', $user->id)->get()->first();
            break;
            case 'esport':
                $data = Esports::where('userid', $user->id)->get()->first();
            break;
            case 'devcom':
                $data = MainComp::where('userid', $user->id)->get()->first();
            break;
        }

        return view('user.rekap', ['user' => $user, 'data' => $data]);
    }

    public function fileIndex ()
    {
        $user = Auth::user();

        switch($user->daftar){
            case 'olim':
                $data = Olim::where('userid', $user->id)->get()->first();
            break;
            case 'esport':
                $data = Esports::where('userid', $user->id)->get()->first();
            break;
            case 'devcom':
                $data = MainComp::where('userid', $user->id)->get()->first();
            break;
        }

        return view('user.file', ['user' => $user, 'data' => $data]);
    }

    public function testIndex ()
    {
        return redirect('/begin');
         $user = Auth::user();
         $time = TimeTable::get()->first();
         $begin_time = new DateTime($time->start, new DateTimeZone("Asia/Jakarta"));
         $currentDate = new DateTime("now",new DateTimeZone('Asia/Jakarta'));

         return view('user.testonline', [
             'user' => $user,
             "endTime" => $begin_time->format('Y-m-d H:i:s'),
             "currentTime" => $currentDate->format('Y-m-d H:i:s'),
             ]);
    }
}
