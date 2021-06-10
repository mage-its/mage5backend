@extends('layouts.admin')

@section('content')
<h4>Daftar Soal</h4>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap" id="dataTable" style="width:100%">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Difficulty</th>
                    <th>Jenis Soal</th>
                    <th>Gambar</th>
                    <th>Soal</th>
                    <th>Jawaban</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->difficulty}}</td>
                    <td>{{$item->jenis_soal}}</td>
                    <td>
                        <a href="{{ asset("soal/$item->image")}}">{{$item->image}}</a>
                    </td>
                    <td>{{$item->soal}}</td>
                    <td>{{$item->answer}}</td>
                    <td>
                        <button class="btn btn-danger DelBtn" type="button" data-timid="{{ $item->id }}"
                            data-namatim="{{'soal dengan id '.$item->id }} ">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah
        Soal</button>
</div>

<!-- Add Soal Modal-->
<form method="POST" enctype="multipart/form-data" action="/daftarsoal/add">
    @csrf
    <div class="modal fade" id="addModal" role="dialog" aria-labelledby="Add Modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Menambah Soal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="addBody">
                    <div class="form-row align-items-center">
                        <label class="col-form-label" for="inlineFormInput">Soal</label>
                        <div class="col-auto">
                            <textarea class="form-control" name="question_soal" rows="5" id="comment"></textarea>
                        </div>
                    </div>

                    <div class="form-row align-items-center">
                        <label class="col-form-label" for="inlineFormInput">Gambar Soal</label>
                        <div class="col-auto">
                            <input type="file" class="form-control-file" name="image_soal" accept=".jpg, .jpeg, .png">
                        </div>
                    </div>

                    <div class="modal-body" id="addBody">
                        <div class="form-row align-items-center">
                            <label class="col-form-label" for="inlineFormInput">Jawaban</label>
                            <div class="col-auto">
                                <input type="text" class="form-control mb-2" name="answer_soal" id="inlineFormInput">
                            </div>
                        </div>

                        <div class="form-row align-items-center">
                            <label class="col-form-label" for="inlineFormInput">Kesulitan Soal</label>
                            <select name="difficulty_soal" class="custom-select">
                                <option value="1">Easy</option>
                                <option value="2">Normal</option>
                            </select>
                        </div>

                        <div class="form-row align-items-center">
                            <label class="col-form-label" for="inlineFormInput">Jenis Soal</label>
                            <select name="type_soal" class="custom-select">
                                <option value="1">Program</option>
                                <option value="2">Fisika</option>
                                <option value="3">Logika</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" type="submit">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Delete Modal-->
<form method="POST" action="/daftarsoal/hapus">
    @csrf
    <div class="modal fade" id="DelModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin akan Dihapus ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="delBody"></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection