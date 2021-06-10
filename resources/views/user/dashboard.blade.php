@extends('layouts.user')

@section('user') {{$user->name}} @endsection

@section('sidebar')
<li class="nav-item active">
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
<li class="nav-item">
    <a class="nav-link" href="/submission">
        <i class="fas fa-edit"></i>
        <span>Submisi</span>
    </a>
</li>
@endif
@endsection

@section('content')
<div class="container">
    <h2><b>Welcome, {{$user->name}} ! </b></h2>
    <div>
        Ini adalah halaman peserta
        @if($user->daftar == 'olim')
        Olimpiade
        @elseif($user->daftar == 'devcom')
        Development Competition
        @else($user->daftar == 'esport')
        Esport
        @endif
    </div>
    <h2 class="mt-5"><b>Pengumuman</b></h2>
    @if (!$data->is_submitted)
    <div class="alert alert-warning">
        Anda belum menyelesaikan pendaftaran, segera selesaikan pendaftaran anda !
        <a href="#">Selesaikan Pendaftaran</a>
    </div>
    @elseif(!isset($data->path_buktibayar))
    <div class="alert alert-warning">
        Anda belum melakukan pembayaran, segera lakukan pembayaran !
        <a href="/bayar">Melakukan Pembayaran</a>
    </div>
    @elseif(!isset($data->path_proposal) && $user->daftar == 'devcom')
    <div class="alert alert-warning">
        Anda belum melakukan mengunggah Proposal, segera mengunggah Proposal !
        <a href="/submission">Unggah Proposal</a>
    </div>
    @elseif(!$data->status)
    <div class="alert alert-danger">
        Data anda belum di verifikasi oleh panitia
    </div>
    @elseif($data->status)
    <div class="alert alert-success">
        Data anda sudah di verifikasi oleh panitia
    </div>
    @endif
    @foreach ($announce as $item)
    <div class="alert alert-info">
        {!!$item->data!!}
    </div>
    @endforeach
</div>
@endsection