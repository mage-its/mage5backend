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
<li class="nav-item active">
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
@if (!$data->is_submitted)
<div class="alert alert-danger">
    Anda belum menyelesaikan pendaftaran, silahkan menyelesaikan pendaftaran anda terlebih dahulu !
    <a href="#">Selesaikan Pendaftaran</a>
</div>
@elseif($user->daftar == 'devcom' && $data->tahap == 1)
<div class="alert alert-danger">
    Pembayaran untuk Development Competition akan dilakukan apabila anda lolos babak 1
</div>
@elseif(isset($data->path_buktibayar))
<div class="alert alert-success">
    Anda sudah melakukan pembayaran.
</div>
@endif
<h2 class="mx-auto text-center"><b>UNGGAH BUKTI PEMBAYARAN</b></h2>
<div class="mx-auto text-center">Halo {{$data->nama_tim}}, kamu terdaftar dalam MAGE 5 dengan nomer pendaftaran</div>
<h3 class="mx-auto text-center"><b>{{$data->no_peserta}}</b></h3>
<div class="mx-5 text-left">Segera lakukan pembayaran dengan cara :</div>
<div class="mx-auto text-center">
    <ol>
        <li>Online dengan cara transfer ke bank BNI 0551015362 a.n. Nia Angellina sejumlah
            <h3><b>Rp. {{$data->price}}</b></h3>
            <i>(penambahan 3 digit terakhir digunakan agar memudahkan dalam konfirmasi)</i>
        </li>
        <li>Offline dengan cara membayar secara cash ke panitia MAGE 5 yang datang ke sekolahmu</li>
    </ol>
</div>
<div class="mx-auto my-3 text-center"><b>Lalu upload bukti pembayaranmu dibawah ini :</b></div>
<form method="POST" enctype="multipart/form-data" action="/uploadbb">
    @csrf
    <input type="hidden" value="{{$data->id}}" name="bayar_id">
    <input type="hidden" value="{{$user->daftar}}" name="user_daftar">
    <div class="form-group">
        <label>Nama Pengirim Transfer</label>
        <input oninput="this.value = this.value.toUpperCase()" required class="form-control" name="nama_bayar"
            placeholder="Nama Pengirim Transfer...">
    </div>
    <div class="form-group ">
        <label>Bukti Pembayaran</label>
        <input type="file" required class="form-control-file" required name="scan_buktibayar"
            accept=".jpg, .jpeg, .png">
        <div><b>Catatan: harap mengunggah bukti yang jelas terlihat nama pengirim, nama penerima, nominal dan tanggal
                pembayaran</b></div>
    </div>
    <input type="submit" @if (!$data->is_submitted || ($user->daftar == 'devcom' && $data->tahap == 1) ||
    isset($data->path_buktibayar))
    disabled
    class="btn btn-secondary my-3"
    @endif
    class="btn btn-primary my-3"
    value="Submit" >
</form>
@endsection