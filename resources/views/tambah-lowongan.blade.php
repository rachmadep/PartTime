@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Tambah Lowongan')
@section('header_styles')
  <!-- CSS -->
<link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endsection
@section('content')
    <section id="content">
      <div class="col-lg-3 col-md-3 col-xs-12 hidden-xs">
        <div class="row profil">{{-- Profil --}}
          <div class="card widget-profile">
            <h2 class="card__header">
              Profil
            </h2>
            <div class="card__header card__header--highlight text-center">
              <img src="{{ asset('img/profil/bagas.png') }}" class="widget-profile__img" alt="">
              <h2>Bagas Aji Pratama</h2>
            </div>
            <div class="list-group list-group--striped">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#">
                    <button class="btn btn-primary apply btn--icon-text" style="margin-bottom:10px"><i class="zmdi zmdi-account-circle"></i> Lihat Akun</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>{{-- End Profil --}}

        <div class="row kategori">{{-- Kategori --}}
          <div class="card">
              <h2 class="card__header">
                Kategori
              </h2>
              <div class="list-group">
                  <a href="#" class="list-kategori">
                      <div class="pull-left">
                        <img class="kategori-img" src="https://image.flaticon.com/icons/png/128/61/61125.png" alt="">
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">Tempat Makan</div>
                      </div>
                  </a>
                  <a href="#" class="list-kategori">
                      <div class="pull-left">
                        <img class="kategori-img" src="https://image.flaticon.com/icons/png/128/565/565318.png" alt="">
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">Cleaning & Janitor</div>
                      </div>
                  </a>
                  <a href="#" class="list-kategori">
                      <div class="pull-left">
                        <img class="kategori-img" src="https://image.flaticon.com/icons/png/128/60/60785.png" alt="">
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">Pengajar</div>
                      </div>
                  </a>
                  <a href="#" class="list-kategori">
                      <div class="pull-left">
                        <img class="kategori-img" src="https://image.flaticon.com/icons/png/128/60/60738.png" alt="">
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">Transportasi</div>
                      </div>
                  </a>
              </div>
          </div>
        </div>{{-- End Kategori --}}
      </div>{{-- End Left Side --}}

      <div class="col-lg-9 col-md-9 col-xs-12">{{-- Right Side --}}
        <div class="row lists">{{-- Terpopuler --}}
          <div class="card">
              <h2 class="card__header">
                Tambah Lowongan Kerja
              </h2>
              <hr>
              <div class="row form">
                {{-- <form action="tambah-lowongan/tambah" class="form" method="post" enctype="multipart/form-data"  style="color:#000;"> --}}
                <form action="{{ URL::to('tambah-lowongan/tambah') }}" class="form-horizontal" method="post" enctype="multipart/form-data"  style="color:#000;">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Judul Lowongan</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control" placeholder="Judul Lowongan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-9">
                      <select name="kategori" class="form-control">
                          <option value="">Pilih</option>
                          <option value="Tempat Makan">Tempat Makan</option>
                          <option value="Cleaning & Janitor">Cleaning & Janitor</option>
                          <option value="Pengajar">Pengajar</option>
                          <option value="Transportasi">Transportasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="lokasi" class="form-control" placeholder="lokasi">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hari Kerja</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <div class="col-xs-6">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Senin">
                                  <i class="input-helper"></i>
                                  Senin
                              </label>
                          </div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Selasa">
                                  <i class="input-helper"></i>
                                  Selasa
                              </label>
                          </div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Rabu">
                                  <i class="input-helper"></i>
                                  Rabu
                              </label>
                          </div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Kamis">
                                  <i class="input-helper"></i>
                                  Kamis
                              </label>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Jumat">
                                  <i class="input-helper"></i>
                                  Jumat
                              </label>
                          </div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Sabtu">
                                  <i class="input-helper"></i>
                                  Sabtu
                              </label>
                          </div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="hari[]" value="Minggu">
                                  <i class="input-helper"></i>
                                  Minggu
                              </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Kerja</label>
                    <div class="col-sm-10">
                        <input type="text" name="jam" class="form-control" placeholder="Jam Kerja | ex: (15.00-20.00 WIB)">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                    <div class="col-sm-9">
                      <select name="pendidikan" class="form-control">
                          <option value="">Pilih</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA/SMK">SMA/SMK</option>
                          <option value="Diploma">Diploma</option>
                          <option value="Sarjana">Sarjana</option>
                          <option value=">Sarjana">>Sarjana</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-10">
                        <input type="text" name="gaji" class="form-control" placeholder="Gaji">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <div class="radio">
                          <label>
                              <input type="radio" name="kelamin" value="Laki-Laki dan Perempuan">
                              <i class="input-helper"></i>
                              Laki-Laki dan Perempuan
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="kelamin" value="Laki-Laki">
                              <i class="input-helper"></i>
                              Laki-Laki
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="kelamin" value="Perempuan">
                              <i class="input-helper"></i>
                              Perempuan
                          </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control textarea-autosize" name="deskripsi" placeholder="Deskripsi"></textarea>
                        <i class="form-group__bar"></i>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kontak</label>
                    <div class="col-sm-10">
                      <textarea class="form-control textarea-autosize" name="kontak" placeholder="Kontak"></textarea>
                      <i class="form-group__bar"></i>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Foto Pendukung</label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-preview" data-trigger="fileinput"></div>

                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          <span class="btn btn-default btn-file">
                              <span class="fileinput-new">Upload Foto Pendukung</span>
                              <span class="fileinput-exists">Ganti Foto Pendukung</span>
                              <input type="file" name="foto">
                          </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Foto Ijin Usaha</label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-preview" data-trigger="fileinput"></div>

                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          <span class="btn btn-default btn-file">
                              <span class="fileinput-new">Upload Ijin Usaha</span>
                              <span class="fileinput-exists">Ganti Ijin Usaha</span>
                              <input type="file" name="ijin">
                          </span>
                      </div>
                    </div>
                  </div>

                  <div class="aksi-iklan" style="text-align:right;">
                    <ul>
                      <li style="display:inline;">
                        <a href="#" class="btn btn-danger danger">Batal</a>
                      </li>
                      <li style="display:inline;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary apply">Simpan</button>
                        {{-- <a href="#" class="btn btn-primary apply" data-toggle="modal" data-target="#myModal">Simpan</a> --}}
                      </li>
                    </ul>
                  </div>
                </form>

              </div>
          </div>
        </div>{{-- End Terpopuler --}}
      </div>
    </section>
@endsection

@section('page_js')
  {{-- <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> --}}
  <script src="vendors/fileinput/fileinput.min.js"></script>
  <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
@endsection
