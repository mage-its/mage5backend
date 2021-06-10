
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
        <li class="nav-item active">
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
   <form method="POST" enctype="multipart/form-data" action="/twibbon">
        @csrf
        <input type="file" name="gambar" id="gambar">
        <input type="hidden" name="image" id="image">

        <div class="row">
            <div class="col-md-8 text-center">
                    <div id="image_demo" style="width:350px; margin-top:30px"></div>
            </div>
            <div class="col-md-4" style="padding-top:30px;">
                    <input type="submit" value="Bikin Twibbon !" class="btn btn-primary crop_image">
            </div>
        </div>

    </form>
@endsection