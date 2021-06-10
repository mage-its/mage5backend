@extends('layouts.admin')

@section('content')
<h4>Daftar Score Details Olimpiade NO PESERTA : {{$userInfo->no_peserta}}, TIM : {{$userInfo->nama_tim}}</h4>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-striped table-bordered display nowrap" id="dataTable" style="width:100%">
      <thead>
        <tr>
          <th>No.</th>
          <th>No Soal</th>
          <th>Mata Pelajaran</th>
          <th>ID Soal</th>
          <th>Benar</th>
          <th>Jumlah Tries</th>
          <th>Jawaban Terakhir</th>
          <th>Waktu Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>

          <td>{{$item->id}}</td>
          <td>{{$item->no_soal}}</td>
          <td>{{$item->jenis_soal}}</td>
          <td>{{$item->soalid}}</td>
          <td>{{$item->correct}}</td>
          <td>{{$item->tries}}</td>
          <td>{{$item->last_answer}}</td>
          <td>{{$item->updated_at}}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection