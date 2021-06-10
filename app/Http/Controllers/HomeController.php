<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Olim;
use App\Kode;
use Illuminate\Http\Request;
use App\Esports;
use App\MainComp;
use Illuminate\Support\Carbon;
use App\Pengumuman;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $data = '';
        $date = Carbon::now()->toDateString();

        $announce = Pengumuman::where('start','<=', $date)
            ->where('end','>=', $date);

        //get data for dashboard and replace announcement value
        if ($user->daftar == 'olim') {
            $data = Olim::where('userid', $user->id)->get()->first();
            $announce = $announce->where('type', 'olim');
        }
        else if ($user->daftar == 'esport') {
            $data = Esports::where('userid', $user->id)->get()->first();
            $announce = $announce->where('type', 'esport');
        }
        else if ($user->daftar == 'devcom') {
            $data = MainComp::where('userid', $user->id)->get()->first();
            $announce = $announce->where('type', 'devcom');
        } else {
            $announce = $announce->where('type', 'guest');
        }

        $announce = $announce->get();

        if ($user->is_admin) {
            return redirect('/admin'); //redirect to admin page
        } else if (!isset($user->daftar)) {
            return view('home', ['user' => $user, 'announce' => $announce  ]); //redirect to pilihan lomba
        } else {
            //redirect to user dashboard
            return view('user.dashboard', ['user' => $user, 'data' => $data, 'announce' => $announce  ]); 
        }
    }

    public function upload(Request $request)
    {
        $lomba = $request->user_daftar;
        $bukti = $request->file('scan_buktibayar');
        if ($lomba == 'olim') {
            $tim = Olim::where('id', $request->bayar_id)->get()->first();
            $name = $tim->nama_tim.'-'.$tim->no_peserta.'.'.$bukti->getClientOriginalExtension();
            Olim::where('id', $request->bayar_id)->update([
                'path_buktibayar' => $name,
                'nama_bayar' => $request->nama_bayar,
                'status_bayar' => true,
            ]);

        } else if ($lomba == 'esport') {

            $tim = Esports::where('id', $request->bayar_id)->get()->first();
            $name = $tim->nama_tim.'-'.$tim->no_peserta.'.'.$bukti->getClientOriginalExtension();
            Esports::where('id', $request->bayar_id)->update([
                'path_buktibayar' => $name,
                'nama_bayar' => $request->nama_bayar,
                'status_bayar' => true,
            ]);
        } else {
            $tim = MainComp::where('id', $request->bayar_id)->get()->first();
            $name = $tim->nama_tim.'-'.$tim->no_peserta.'.'.$bukti->getClientOriginalExtension();
            MainComp::where('id', $request->bayar_id)->update([
                'path_buktibayar' => $name,
                'nama_bayar' => $request->nama_bayar,
                'status_bayar' => true,
            ]);
        }
        $bukti->move(public_path().'/bb/', $name);

        return redirect('/home');
    }

    //upload Garum dan Link IG
    public function uploadDev(Request $request) {
        $file = $request->file('file_abstrak');
        $tim = MainComp::where('id', $request->data_id)->get()->first(); //get id tim

        //setup nama file
        $name = $tim->nama_tim.'-'.$tim->no_peserta.'.'.$file->getClientOriginalExtension();

        MainComp::where('id', $request->data_id)->update([
            'path_abstrak' => $name,
            'link_poster' => $request->link_poster,
            'sudah_upload' => true,
            'status_bayar' => true,
        ]);

        //delete files if exists
        if (isset($tim->path_abstrak)) {
            unlink(public_path().'/abstrak/'.$tim->path_abstrak);
        }
        $file->move(public_path().'/abstrak/', $name);

        return redirect('/home');
    }

    //upload Proposal    
    public function uploadProposal(Request $request) {
        $file = $request->file('file_abstrak');
        $tim = MainComp::where('id', $request->data_id)->get()->first(); //get id tim

        //setup nama file
        $name = $tim->nama_tim.'-'.$tim->no_peserta.'.'.$file->getClientOriginalExtension();

        MainComp::where('id', $request->data_id)->update([
            'path_proposal' => $name,
            'sudah_upload' => true,
            'status_bayar' => true,
        ]);

        //delete files if exists
        if (isset($tim->path_proposal)) {
            unlink(public_path().'/proposal/'.$tim->path_proposal);
        }
        $file->move(public_path().'/proposal/', $name);

        return redirect('/home');
    }

    //upload Laporan Progress 
    public function uploadProgress(Request $request) {
        $file = $request->file('file_abstrak');
        $tim = MainComp::where('id', $request->data_id)->get()->first(); //get id tim

        //setup nama file
        $name = $tim->nama_tim.'-'.$tim->no_peserta.'.'.$file->getClientOriginalExtension();

        MainComp::where('id', $request->data_id)->update([
            'path_progress' => $name,
            'link_video' => $request->link_video,
            'sudah_upload' => true,
        ]);

        //delete files if exists
        if (isset($tim->path_progress)) {
            unlink(public_path().'/progress/'.$tim->path_progress);
        }
        $file->move(public_path().'/progress/', $name);

        return redirect('/home');
    }


    public function listIndex() {
        $user = Auth::user();
        return view('list', ['user'=>$user]);
    }
}
