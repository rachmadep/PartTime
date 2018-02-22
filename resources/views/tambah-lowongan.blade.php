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
                <form class="" action="index.html" method="post" style="color:#000;">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-circle"></i></span>
                      <div class="form-group form-group--float">
                          <input type="text" class="form-control">
                          <label class="black">Judul Lowongan</label>
                          <i class="form-group__bar"></i>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                      <div class="form-group form-group--float">
                          <input type="text" class="form-control">
                          <label class="black">Lokasi</label>
                          <i class="form-group__bar"></i>
                      </div>
                  </div>
                  Waktu Kerja :
                  <div class="input-group">
                    <div class="col-xs-6">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Senin
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Selasa
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Rabu
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Kamis
                          </label>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Jumat
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Sabtu
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Minggu
                          </label>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                          <div class="form-group">
                          <input type='text' class="form-control time-picker" placeholder="Waktu Mulai">
                          <i class="form-group__bar"></i>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                          <div class="form-group">
                          <input type='text' class="form-control time-picker" placeholder="Waktu Selesai">
                          <i class="form-group__bar"></i>
                      </div>
                  </div>
                  <div class="form-group form-group--select">
                      <select class="form-control">
                          <option>Pendidikan Terakhir</option>
                          <option>SD</option>
                          <option>SMP</option>
                          <option>SMA/SMK</option>
                          <option>Diploma</option>
                          <option>Sarjana</option>
                          <option>>Sarjana</option>
                      </select>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-local-offer"></i></span>
                      <div class="form-group form-group--float">
                          <input type="text" class="form-control">
                          <label class="black">Gaji</label>
                          <i class="form-group__bar"></i>
                      </div>
                  </div>

                  Jenis Kelamin :
                  <div class="input-group">
                    <div class="col-xs-6">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Laki-Laki
                          </label>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="">
                              <i class="input-helper"></i>
                              Perempuan
                          </label>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-view-list-alt"></i></span>
                      <div class="form-group form-group--float">
                          <input type="text" class="form-control">
                          <label class="black">Deskripsi</label>
                          <i class="form-group__bar"></i>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                      <div class="form-group form-group--float">
                          <input type="text" class="form-control">
                          <label class="black">Kontak</label>
                          <i class="form-group__bar"></i>
                      </div>
                  </div><br>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview" data-trigger="fileinput"></div>

                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      <span class="btn btn-default btn-file">
                          <span class="fileinput-new">Upload Foto Pendukung</span>
                          <span class="fileinput-exists">Ganti Foto Profil</span>
                          <input type="file" name="...">
                      </span>
                  </div>
                </form>
                <div class="aksi-iklan" style="text-align:right;">
                  <ul>
                    <li style="display:inline;">
                      <a href="#" class="btn btn-danger danger">Batal</a>
                    </li>
                    <li style="display:inline;">
                      <a href="#" class="btn btn-primary apply" data-toggle="modal" data-target="#myModal">Simpan</a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>{{-- End Terpopuler --}}
      </div>
    </section>
@endsection

@section('page_js')
  <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
@endsection
