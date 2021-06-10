<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainComp;
use Illuminate\Support\Facades\Auth;
use App\Kode;
use App\User;
use Laracsv\Export;

class MainCompController extends Controller
{
    // return all submitted peserta
    public function index()
    {
        $peserta = MainComp::select('users.email','users.id', 'userid', 'no_peserta', 'kat', 'cabang_lomba',
        'asal_perguruan', 'asal_alamat', 'asal_kota', 'nama_tim', 'nama_pembimbing', 'hp_pembimbing',
        'wa_pembimbing', 'nama_ketua', 'hp_ketua', 'wa_ketua', 'line_ketua', 'nama_anggota1',
        'nama_anggota2', 'path_ktpketua', 'path_ktpanggota1', 'path_ktpanggota2', 'path_buktibayar',
        'path_abstrak', 'path_proposal', 'link_poster', 'nama_bayar', 'price', 'tahap', 'main_comp.updated_at', 'asal_info', 'info','status')
        ->join('users', 'users.id','=', 'main_comp.userid' )
        ->where('is_submitted',true)->orderBy('no_peserta', 'ASC')->get();

        return view('admin.daftarmaincomp', ['peserta' => $peserta]);
    }

    // return all submitted peserta yang lolos tahap 2
    public function index_req($tahap)
    {
        $peserta = MainComp::select('users.email','users.id', 'userid', 'no_peserta', 'kat', 'cabang_lomba',
        'asal_perguruan', 'asal_alamat', 'asal_kota', 'nama_tim', 'nama_pembimbing', 'hp_pembimbing',
        'wa_pembimbing', 'nama_ketua', 'hp_ketua', 'wa_ketua', 'line_ketua', 'nama_anggota1',
        'nama_anggota2', 'path_ktpketua', 'path_ktpanggota1', 'path_ktpanggota2', 'path_buktibayar',
        'path_abstrak', 'path_proposal', 'link_poster', 'nama_bayar', 'price', 'tahap', 'path_progress', 'link_video', 'main_comp.updated_at', 'asal_info', 'info','status') 
        ->join('users', 'users.id','=', 'main_comp.userid' )
        ->where('is_submitted',true)
        ->where('tahap', $tahap)
        ->orderBy('no_peserta', 'ASC')
        ->get();

        return view('admin.daftarmaincomp', ['peserta' => $peserta]);
    }
    // delete peserta
    public function hapus(Request $request)
    {
        $timId = $request->timId;

        $data = MainComp::where('id', $timId)->get()->first();
        User::where('id', $data->userid)->update(['daftar' => null]);
        MainComp::where('id', $timId)->delete();

        return redirect()->back();
    }

    //udpate data peserta
    public function update(Request $request)
    {
        MainComp::where('id', $request->timId)->update([
            'no_peserta'=>$request->no_peserta,
            'kat' => $request->kat,
            'cabang_lomba' => $request->cabang_lomba,
            'asal_perguruan'=>$request->asal_perguruan,
            'asal_alamat'=>$request->asal_alamat,
            'asal_kota'=>$request->asal_kota,
            'nama_tim'=>$request->nama_tim,
            'nama_pembimbing'=>$request->nama_pembimbing,
            'hp_pembimbing'=>$request->hp_pembimbing,
            'wa_pembimbing'=>$request->wa_pembimbing,
            'nama_ketua'=>$request->nama_ketua,
            'hp_ketua'=>$request->hp_ketua,
            'wa_ketua'=>$request->wa_ketua,
            'line_ketua'=>$request->line_ketua,
            'nama_anggota1'=>$request->nama_anggota1,
            'nama_anggota2'=>$request->nama_anggota2,
        ]);

        return redirect()->back();
    }

    //download CSV
    public function download()
    {
        $data = MainComp::orderBy('no_peserta', "ASC")->get();
        $data = MainComp::select('users.email','users.id', 'userid', 'no_peserta', 'kat', 'cabang_lomba',
        'asal_perguruan', 'asal_alamat', 'asal_kota', 'nama_tim', 'nama_pembimbing', 'hp_pembimbing',
        'wa_pembimbing', 'nama_ketua', 'hp_ketua', 'wa_ketua', 'line_ketua', 'nama_anggota1',
        'nama_anggota2', 'path_ktpketua', 'path_ktpanggota1', 'path_ktpanggota2', 'path_buktibayar','status',
        'path_abstrak', 'path_proposal', 'link_poster', 'nama_bayar', 'price', 'tahap', 'main_comp.updated_at', 'asal_info', 'info')
        ->join('users', 'users.id','=', 'main_comp.userid' )
        ->orderBy('no_peserta', 'ASC')
        ->get();

        $csv = new Export();
        $csv->build($data, [
            'no_peserta',
            'email',
            'kat',
            'cabang_lomba',
            'asal_perguruan',
            'asal_alamat',
            'asal_kota',
            'nama_tim',
            'nama_pembimbing',
            'hp_pembimbing',
            'wa_pembimbing',
            'nama_ketua',
            'hp_ketua',
            'wa_ketua',
            'line_ketua',
            'nama_anggota1',
            'nama_anggota2',
            'asal_info',
            'info',
            'nama_bayar',
            'price',
            'status',
            'tahap',
            ])->download('devcomp'.date('Y-m-d').'.csv');
    }

    //download CSV
    public function downloadReq($tahap)
    {
        $data = MainComp::select('users.email','users.id', 'userid', 'no_peserta', 'kat', 'cabang_lomba',
        'asal_perguruan', 'asal_alamat', 'asal_kota', 'nama_tim', 'nama_pembimbing', 'hp_pembimbing',
        'wa_pembimbing', 'nama_ketua', 'hp_ketua', 'wa_ketua', 'line_ketua', 'nama_anggota1',
        'nama_anggota2', 'path_ktpketua', 'path_ktpanggota1', 'path_ktpanggota2', 'path_buktibayar','status',
        'path_abstrak', 'path_proposal', 'link_poster', 'nama_bayar', 'price', 'tahap','main_comp.updated_at', 'asal_info', 'info')
        ->join('users', 'users.id','=', 'main_comp.userid' )
        ->where('is_submitted',true)
        ->where('tahap', $tahap)
        ->orderBy('no_peserta', 'ASC')
        ->get();

        $csv = new Export();
        $csv->build($data, [
            'no_peserta',
            'email',
            'kat',
            'cabang_lomba',
            'asal_perguruan',
            'asal_alamat',
            'asal_kota',
            'nama_tim',
            'nama_pembimbing',
            'hp_pembimbing',
            'wa_pembimbing',
            'nama_ketua',
            'hp_ketua',
            'wa_ketua',
            'line_ketua',
            'nama_anggota1',
            'nama_anggota2',
            'asal_info',
            'info',
            'nama_bayar',
            'price',
            'status',
            'tahap'
            ])->download('devcomp_tahap2_'.date('Y-m-d').'.csv');
    }

    //verif peserta
    public function toggleVerif(Request $request)
    {
        $timId = $request->timId;
        $status = MainComp::where('id', $timId)->get(['status'])->first(); //get user verif status
        if ($status->status == false) {
            MainComp::where('id', $timId)->update(['status' => true, 'no_peserta' => $request->noPeserta]);
        } else {
            MainComp::where('id', $timId)->update(['status' => false]);
        }
        return redirect()->back();
    }

    //verif peserta untuk kestari
    public function toggleVerifKestari(Request $request)
    {
        $timId = $request->timId;
        $status = MainComp::where('id', $timId)->get(['status_kestari'])->first(); //get user verif status
        if ($status->status_kestari == false) {
            MainComp::where('id', $timId)->update(['status_kestari' => true]);
        } else {
            MainComp::where('id', $timId)->update(['status_kestari' => false]);
        }
        return redirect()->back();
    }

    //verif peserta untuk acara
    public function toggleVerifAcara(Request $request)
    {
        $timId = $request->timId;
        $status = MainComp::where('id', $timId)->get(['status_acara'])->first(); //get user verif status
        if ($status->status_acara == false) {
            MainComp::where('id', $timId)->update(['status_acara' => true]);
        } else {
            MainComp::where('id', $timId)->update(['status_acara' => false]);
        }
        return redirect()->back();
    }


    //User Function
    public function userIndex()
    {
        //normal (open registration)
         $user =  Auth::user();
        $data = MainComp::where('userid', $user->id)->get()->first();
        return view('user.devcomp', ['user' => $user->name, 'data' => $data, 'id' => $user->id]); 


        //close registration
        return redirect('/closed');
    }

    public function submit(Request $request)
    {
        $userId = Auth::user()->id;
        $cabang = '';
        $prefix = '';
        switch($request->kat) {
            case 1:
                switch($request->cabang_lomba) {
                    case 1: $cabang = 'gdevm'; $prefix= 'DCG1'; break;
                    case 2: $cabang = 'adevm'; $prefix= 'DCA1'; break;
                }
            break;
            case 2:
                switch($request->cabang_lomba) {
                    case 1: $cabang = 'gdevs'; $prefix= 'DCG0'; break;
                    case 2: $cabang = 'adevs'; $prefix= 'DCA0'; break;
                }
            break;
            default: $cabang = 'idevm'; $prefix= 'DCI1'; break;
        }
        $kode = Kode::where('name', $cabang)->get()->first();
        $ktpKetua = $request->file('scan_ktpketua');
        $ktpAnggota1 = $request->file('scan_ktpanggota1');
        $ktpAnggota2 = $request->file('scan_ktpanggota2');
        $namaKetua = $request->nama_tim.'-KETUA-'.$prefix.$kode->no.'.'.$ktpKetua->getClientOriginalExtension();
        $namaAnggota1 = $request->nama_tim.'-ANGGOTA1-'.$prefix.$kode->no.'.'.$ktpAnggota1->getClientOriginalExtension();
        $namaAnggota2 = $request->nama_tim.'-ANGGOTA2-'.$prefix.$kode->no.'.'.$ktpAnggota2->getClientOriginalExtension();

        $mainComp = new MainComp;
        $mainComp->no_peserta = $prefix.str_pad($kode->no, 3, '0', STR_PAD_LEFT);

        if (!isset($request->kat)) {
            $mainComp->kat = 1;
        } else {
        $mainComp->kat = $request->kat;
        }

        $mainComp->cabang_lomba = $request->cabang_lomba;
        $mainComp->asal_perguruan = $request->asal_perguruan;
        $mainComp->asal_alamat = $request->asal_alamat;
        $mainComp->asal_kota = $request->asal_kota;
        $mainComp->nama_tim = $request->nama_tim;
        $mainComp->nama_pembimbing = $request->nama_pembimbing;
        $mainComp->hp_pembimbing = $request->hp_pembimbing;
        $mainComp->wa_pembimbing = $request->wa_pembimbing;
        $mainComp->nama_ketua = $request->nama_ketua;
        $mainComp->hp_ketua = $request->hp_ketua;
        $mainComp->wa_ketua = $request->wa_ketua;
        $mainComp->line_ketua = $request->line_ketua;
        $mainComp->nama_anggota1 = $request->nama_anggota1;
        $mainComp->nama_anggota2 = $request->nama_anggota2;
        $mainComp->asal_info = $request->asal_info;
        $mainComp->info = $request->info;
        $mainComp->path_ktpketua = $namaKetua;
        $mainComp->path_ktpanggota1 = $namaAnggota1;
        $mainComp->path_ktpanggota2 = $namaAnggota2;
        $mainComp->userid = $userId;
        $mainComp->price = $kode->price.'.'.str_pad($kode->no, 3, '0', STR_PAD_LEFT);
        $mainComp->is_submitted = true;
        $mainComp->save();

        User::where('id', $userId)->update(['daftar' => 2]);
        Kode::where('name', $cabang)->update(['no' => $kode->no+1]);

        $ktpKetua->move(public_path().'/kp/', $namaKetua);
        $ktpAnggota1->move(public_path().'/kp/', $namaAnggota1);
        $ktpAnggota2->move(public_path().'/kp/', $namaAnggota2);
        return redirect('/home');
    }

    public function lolos (Request $request)
    {
        $timId = $request->timId;
        $tahap = $request->tahap;

        MainComp::where('id', $timId)->update([
            'tahap' => $tahap,
            'sudah_upload' => false,
            'status_bayar' => false,
            'status_kestari' => false,
            'status_acara' => false,
            'status' => false
        ]);

        return redirect()->back();
    }

    public function down () {
        $noPeserta = ['DCG1020', 'DCG1047', 'DCG0018', 'DCA0302', 'DCA0309',
        'DCA0323', 'DCA0325', 'DCA0339', 'DCA0347', 'DCA0341', 'DCA0351'];

        foreach($noPeserta as $item) {
            MainComp::where('no_peserta', $item)->update([
                'tahap' => 2
            ]);
        }
    }

}
