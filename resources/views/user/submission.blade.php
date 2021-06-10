@extends('layouts.user')

@section('user') {{$user->name}} @endsection

@section('sidebar')
<li class="nav-item">
    <a class="nav-link" href="/home">
        <i class="fas fa-edit"></i>
        <span>Beranda</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/data">
        <i class="fas fa-edit"></i>
        <span>Data Peserta</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/bayar">
        <i class="fas fa-edit"></i>
        <span>Pembayaran</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/file">
        <i class="fas fa-edit"></i>
        <span>File</span>
    </a>
</li>
@if ($user->daftar == 'olim')
<li class="nav-item">
    <a class="nav-link" href="/twibbon">
        <i class="fas fa-edit"></i>
        <span>Create Twibbon</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/testOnline">
        <i class="fas fa-edit"></i>
        <span>Tes Online</span>
    </a>
</li>
@elseif ($user->daftar == 'devcom')
<li class="nav-item active">
    <a class="nav-link" href="/submission">
        <i class="fas fa-edit"></i>
        <span>Submisi</span>
    </a>
</li>
@endif
@endsection

@section('content')

@if (isset($data->path_progress))
<div class="alert alert-success">
    Anda sudah mengunggah Laporan Progress
</div>

@elseif($user->daftar == 'devcom' && $data->tahap <= 2) <div class="alert alert-danger">
    Upload Laporan Progress dan Video Teaser untuk Development Competition akan dilakukan apabila anda lolos babak 2
    </div>

    @endif

    <h2 class="mx-auto text-center"><b>UNGGAH LAPORAN PROGRESS DAN VIDEO TEASER</b></h2>
    <div class="mx-auto text-center">Halo {{$data->nama_tim}}, kamu terdaftar dalam Development Competition MAGE 5
        dengan
        nomer pendaftaran</div>
    <h3 class="mx-auto text-center"><b>{{$data->no_peserta}}</b></h3>

    <form method="POST" enctype="multipart/form-data" action="/uploaddev">
        @csrf
        <input type="hidden" value="{{$data->id}}" name="data_id">
        <input type="hidden" value="{{$user->daftar}}" name="user_daftar">

        {{-- file progress --}}
        <div class="form-group ">
            <label>Upload Laporan Progress</label>)
            <input type="file" required class="form-control-file" required name="file_abstrak" accept=".pdf">
        </div>

        {{-- link video --}}
        <div class="form-group">
            <label>Link Video Teaser</label>
            <input required class="form-control" name="link_video" placeholder="Link Video Teaser">
        </div>

        <input type="submit" class="btn btn-primary my-3" value="Submit">
    </form>
    @endsection