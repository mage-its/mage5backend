@extends('layouts.user')

@section('user') {{$user->name}} @endsection

@section('sidebar')
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-edit"></i>
            <span>Daftar</span>
        </a>
    </li>
@endsection

@section('content')
<div class="container">
    <h1><b>Welcome, {{$user->name}} ! </b></h1>
    <h2>
        Ini adalah halaman awal peserta MAGE 5. Halaman ini hanya dapat diakses selama anda belum mendaftar kompetisi. Anda hanya dapat mendaftar <b>SATU KOMPETISI.</b> Setelah anda terdaftar, Anda akan dialihkan ke halaman masing-masing kompetisi.
    </h2>
    <div class="mt-5"><b>Silahkan memilih kompetisi</b></div>
    <div class="card-deck mt-2">
        <div class="card">
            <div class="card-body">
            <h3 class="card-title"><b>Development Competition</b></h3>
            <button class="btn btn-primary" onclick="location.href='/signupDevcomp'">Daftar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h3 class="card-title"><b>Olimpiade Pelajar</b></h3>
            <button class="btn btn-primary" onclick="location.href='/signupOlim'">Daftar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h3 class="card-title"><b>Esports Competition</b></h3>
            <button class="btn btn-primary" onclick="location.href='/signupEsport'">Daftar</button>
            </div>
        </div>
    </div>
    <h2 class="mt-5"><b>Pengumuman</b></h2>
    @foreach ($announce as $item)
        <div class="alert alert-info">
            {!!$item->data!!}
        </div>
    @endforeach
</div>
@endsection
