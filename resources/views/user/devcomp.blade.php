@extends('layouts.user')

@section('user') {{$user}} @endsection

@section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fas fa-edit"></i>
            <span>Daftar</span>
        </a>
    </li>
@endsection

@section('content')
    <form id="form-utama" method="POST" enctype="multipart/form-data" action="/submitDevComp">
        @csrf
        @if ($data !== null)
            <input type="hidden" value="{{$data->id}}" name="id" />
        @endif
        <input type="hidden" value="devcom" name="type" />
        <div id="main-form">
            <h3><b>Asal</b></h3>
            <section>
                <div class="form-group">
                    <label for="asalSekolah">Asal Perguruan Tinggi / Sekolah</label>
                    <input oninput="this.value = this.value.toUpperCase()" type="text" id="asal" value="{{$data->asal_perguruan ?? ""}}" required class="upper form-control" name="asal_perguruan" aria-describedby="emailHelp" placeholder="Asal Perguruan Tinggi...">
                </div>
                <div class="form-group">
                    <label for="alamatSekolah">Alamat Sekolah</label>
                    <input oninput="this.value = this.value.toUpperCase()"type="text" value="{{$data->asal_alamat ?? ""}}" required class="upper form-control" name="asal_alamat" placeholder="Alamat Sekolah...">
                </div>
                <div class="form-group">
                    <label for="asalKota">Kota Asal</label>
                    <input type="text" value="{{$data->asal_kota ?? ""}}" oninput="this.value = this.value.toUpperCase()"required class="upper form-control" name="asal_kota" placeholder="Kota Asal...">
                </div>
            </section>
            <h3>Tim</h3>
            <section>
                <div class="form-group ">
                    <label>Cabang Lomba</label>
                    <select name="cabang_lomba" class="custom-select" >
                        <option value="1">Game</option>
                        <option value="2">App</option>
                        <option value="3">IOT</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label>Jenjang Lomba</label>
                    <select name="kat" id="kat" class="custom-select" >
                        <option value="1" selected>Mahasiswa</option>
                        <option value="2">Siswa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namaTim">Nama Tim</label>
                    <input type="text"value="{{$data->nama_tim ?? ""}}"required class="form-control upper " oninput="this.value = this.value.toUpperCase()"name="nama_tim" aria-describedby="emailHelp" placeholder="Nama Tim...">
                </div>
                <div class="form-group">
                    <label for="namaTim">Nama Pembimbing</label>
                    <input type="text"value="{{$data->nama_pembimbing ?? ""}}"required class="form-control upper " oninput="this.value = this.value.toUpperCase()"name="nama_pembimbing" aria-describedby="emailHelp" placeholder="Nama Pembimbing...">
                    <small class="form-text text-muted">
                        Jika tidak ada pembimbing, isi dengan -
                    </small>
                </div>
                <div class="form-row align-items-center">
                    <div class="form-group col-md-6">
                        <label for="namaTim">No. HP Pembimbing</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="text"value="{{$data->hp_pembimbing ?? ""}}"required class="form-control upper " oninput="this.value = this.value.toUpperCase()"name="hp_pembimbing" aria-describedby="emailHelp" placeholder="No. Hp Pembimbing...">
                        </div>
                        <small class="form-text text-muted">
                            Jika tidak ada pembimbing, isi dengan -
                        </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="namaTim">No. WA Pembimbing</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="text"value="{{$data->wa_pembimbing ?? ""}}"required class="form-control upper " oninput="this.value = this.value.toUpperCase()"name="wa_pembimbing" aria-describedby="emailHelp" placeholder="No. WA Pembimbing...">
                        </div>
                        <small class="form-text text-muted">
                            Jika tidak ada pembimbing, isi dengan -
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="namaKetua">Nama Ketua</label>
                    <input type="text" value="{{$data->nama_ketua ?? ""}}"required class="form-control upper " oninput="this.value = this.value.toUpperCase()"name="nama_ketua" placeholder="Nama Ketua...">
                </div>
                <div class="form-row align-items-center">
                    <div class="form-group col-md-4">
                        <label>Nomor Hp Ketua</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="number" class="upper form-control" required oninput="this.value = this.value.toUpperCase()"value="{{$data->hp_ketua ?? ""}}" name="hp_ketua" placeholder="Nomor Hp Ketua..." onkeypress="return isNumberKey(event)">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Nomor WA Ketua</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="number" class="upper form-control" oninput="this.value = this.value.toUpperCase()"required name="wa_ketua" value="{{$data->wa_ketua ?? ""}}" placeholder="Nomor WA Ketua..." onkeypress="return isNumberKey(event)">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>ID Line Ketua</label>
                        <input type="text"class="form-control"required value="{{$data->line_ketua ?? ""}}" name="line_ketua" placeholder="ID Line Ketua...">
                    </div>
                </div>
                <div class="form-group ">
                    <label>Nama Anggota 1</label>
                    <input type="text" class=" upper form-control" oninput="this.value = this.value.toUpperCase()"value="{{$data->nama_anggota1 ?? ""}}" name="nama_anggota1"required placeholder="Nama Anggota 1...">
                </div>
                <div class="form-group ">
                    <label>Nama Anggota 2</label>
                    <input type="text" class="upper form-control" oninput="this.value = this.value.toUpperCase()"value="{{$data->nama_anggota2 ?? ""}}"required name="nama_anggota2" placeholder="Nama Anggota 2...">
                </div>
            </section>
            <h3><b>File Submission</b></h3>
            <div><b>Maximum size file yang diperbolehkan adalah 1 MB</b></div>
            <section>
                <div class="form-group ">
                    @if (!isset($data->path_ktpketua))
                        <label>Scan Kartu Pelajar Ketua (wajib)</label>
                    @else
                        <label>Scan Kartu Pelajar Ketua <b class="text-success">Data Sudah Diupload</b> </label>
                    @endif
                    <input type="file" class="form-control-file" @if (!isset($data->path_ktpketua)) required  @endif name="scan_ktpketua" accept=".jpg, .jpeg, .png">
                    <small class="form-text text-muted">
                        Jika tidak ada dapat menggunakan surat keterangan kepala sekolah Atau halaman biodata pada rapor
                    </small>
                </div>
                <div class="form-group ">
                    @if (!isset($data->path_ktpanggota1))
                        <label>Scan Kartu Pelajar Anggota 1 (wajib)</label>
                    @else
                        <label>Scan Kartu Pelajar Anggota 1 <b class="text-success">Data Sudah Diupload</b> </label>
                    @endif
                    <input type="file" class="form-control-file" @if (!isset($data->path_ktpanggota1)) required @endif name="scan_ktpanggota1" accept=".jpg, .jpeg, .png">
                    <small class="form-text text-muted">
                        Jika tidak ada dapat menggunakan surat keterangan kepala sekolah Atau halaman biodata pada rapor
                    </small>
                </div>
                <div class="form-group ">
                    @if (!isset($data->path_ktpanggota2))
                        <label>Scan Kartu Pelajar Anggota 2 (wajib)</label>
                    @else
                        <label>Scan Kartu Pelajar Anggota 2 <b class="text-success">Data Sudah Diupload</b> </label>
                    @endif
                    <input type="file" class="form-control-file" @if (!isset($data->path_ktpanggota2)) required @endif name="scan_ktpanggota2" accept=".jpg, .jpeg, .png">
                    <small class="form-text text-muted">
                        Jika tidak ada dapat menggunakan surat keterangan kepala sekolah Atau halaman biodata pada rapor
                    </small>
                </div>
            </section>
            <h3><b>Asal Info</b></h3>
            <section>
                <div class="form-group ">
                    <label>Dapat Informasi tentang Mage dari</label>
                    <select name="asal_info" class="custom-select" >
                        <option value="1">Media Sosial</option>
                        <option value="2">Guru</option>
                        <option value="3">Roadshow</option>
                        <option value="4">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Asal Info</label>
                    <input type="text" oninput="this.value = this.value.toUpperCase()" class="form-control" id="info" name="info" placeholder="Asal Info..." disabled>
                </div>
            </section>

            <div class="form-check my-4">
                <input class="form-check-input" required name="snk" type="checkbox" id="check">
                <label class="form-check-label" for="check">SAYA MENYETUJUI SYARAT-SYARAT DAN KETENTUAN</label>
            </div>
        </div>

    <!-- Confirm Modal-->
    <div class="modal fade" id="snkModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>SYARAT DAN KETENTUAN <br> MULTIMEDIA AND GAME 5</b></h5> 
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">
                <h4><b>Dengan Mengisi Formulir Ini Saya Menyetujui :</b></h4>
                <ol>
                    <li>Setiap data yang saya isi dalam formulir pendaftaran ini adalah benar dan sah</li>
                    <li>Identitas diri sesuai dengan kartu identitas yang dicantumkan </li>
                    <li>Gambaran umum dan poster yang kami cantumkan adalah karya original dan belum pernah diikutsertakan dalam lomba apapun (khusus peserta development competition) </li>
                    <li>Apabila dikemudian hari ditemukan bahwa dokumen yang telah kami berikan adalah tidak benar, maka kami bersedia dikenakan sanksi sesuai peraturan dan ketentuan yang berlaku </li>
                    <li>Formulir ini diisi tanpa adanya paksaan dari pihak manapun dan untuk digunakan sebagaimana mestinya </li>
                    <li>Kesalahan dalam pengisian biodata bukan tanggung jawab panitia </li>
                </ol>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="agree()" >Setuju</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Submit Modal-->
    <div class="modal fade" id="submitModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>PASTIKAN DATA YANG KAMU ISI BENAR SEKALI LAGI !!!</b></h5> 
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body"> *NOTE<br> PANITIA TIDAK BERTANGGUNG JAWAB ATAS KESALAHAN DATA YANG DIISI PESERTA
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
            </div>
        </div>
    </div>
        <button type="button" class="btn btn-primary my-3" onclick="showModal()">Submit</button>
    </form>
@endsection