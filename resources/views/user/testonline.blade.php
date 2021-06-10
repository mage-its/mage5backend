@extends('layouts.user')

@section('header')
<meta name="endTime" content="{{$endTime}}">
<meta name="currentTime" content="{{$currentTime}}">
@endsection

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
<li class="nav-item active">
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

<div class="card my-2">
    <div class="card-body">
        <h3 class="card-title"><b>Tes Online</b></h3>
        <div id="countdown"><br></div>
        <button class="btn btn-primary" onclick="location.href='/map'" disabled id="startButton">MULAI</button>
    </div>
</div>
@endsection