@extends('layouts.admin')

@section('content')
<h4>Daftar Score Olimpiade</h4>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-striped table-bordered display nowrap" id="dataTable" style="width:100%">
      <thead>
        <tr>
          <th>No.</th>
          <th>No.Peserta</th>
          <th>Nama Tim</th>
          <th>Akurasi</th>
          <th>Jumlah Jawaban Benar</th>
          <th>Jumlah Total Tries</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($score as $item)
        <tr>

          <td>{{$item->id}}</td>
          <td><a href="/scoredetails/{{$item->userid}}">{{$item->no_peserta}}</a></td>
          <td>{{$item->nama_tim}}</td>
          @if ($item->jawaban_tries != 0)
          <td>{{$item->jawaban_benar/$item->jawaban_tries}}</td>
          @else
          <td>0</td>
          @endif
          <td>{{$item->jawaban_benar}}</td>
          <td>{{$item->jawaban_tries}}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection