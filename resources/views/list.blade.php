@extends('layouts.user')

@section('user') {{$user->name}} @endsection

@section('content')

<div class="card-deck">
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
    
@endsection