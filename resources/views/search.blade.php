@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Searching')

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
                Searching "pengajar"
              </h2>
              <a href="#myModal" class="filter" data-toggle="modal" data-target="#filter">
                <small>Filter</small>
                <i class="zmdi zmdi-filter-list"></i>
              </a>
              {{-- <div type="button" class="filter" data-toggle="modal" data-target="#myModal">
                Filter <i class="zmdi zmdi-filter-list"></i>
              </div> --}}
              <hr>
              <div class="list-group">
                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/android-kejar.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="kerja" class="nama-iklan">
                        Pengajar Indonesia Android Kejar
                        <div class="kategori">
                          Pengajar
                        </div>
                      </a>
                      <div class="posting">
                        Ardan Bagus - 5 Februari 2018
                      </div>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Sabtu-Minggu, 09.00-15.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Gedung EDS Jalan Asam Kranji, Yogyakarta
                        </li>
                        <li class="fee">
                          <i class="zmdi zmdi-local-offer"></i> Rp. 400.000 per hari
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-1 col-xs-12 aksi">
                    <div class="aksi-iklan">
                      <ul>
                        <li>
                          <a href="kerja" class="btn btn-success detail">Detail</a>
                        </li>
                        <li>
                          <a href="#" class="btn btn-primary apply">Apply</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- end row iklan --}}

                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="https://spiderimg.amarujala.com/assets/images/2017/11/13/360x243/teacher_1510573856.jpeg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                        Guru Bimbel Ujian Nasional SD
                        <div class="kategori">
                          Pengajar
                        </div>
                      </a>
                      <div class="posting">
                        Bagas Aji - 5 Desember 2017
                      </div>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Sabtu-Minggu, 15.00-17.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Jl. Karangsuci No.2 C, Yogyakarta
                        </li>
                        <li class="fee">
                          <i class="zmdi zmdi-local-offer"></i> Rp. 40.000 per hari
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-1 col-xs-12 aksi">
                    <div class="aksi-iklan">
                      <ul>
                        <li>
                          <a href="#" class="btn btn-success detail">Detail</a>
                        </li>
                        <li>
                          <a href="#" class="btn btn-primary apply">Apply</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- end row iklan --}}


                {{-- <div class="row">
                  <a href="#" class="btn btn-info selengkapny">Lihat Selengkapny</a>
                </div> --}}
              </div>
          </div>
        </div>{{-- End Terpopuler --}}

      </div>
      <!-- Modal -->
      <div class="modal fade" id="filter">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">
                          Filter
                          <small>Pencarian</small>
                      </h4>
                  </div>
                  <div class="modal-body">
                    <form class="" action="index.html" method="post">
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
                      Gaji :
                      <div class="row">
                        <div class="col-xs-6">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="MIN">
                              <i class="form-group__bar"></i>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="MAX">
                              <i class="form-group__bar"></i>
                          </div>
                        </div>
                      </div>

                      <div class="form-group form-group--select">
                          <select class="form-control">
                              <option>Pendidikan Terakhir</option>
                              <option>SD</option>
                              <option>SMP</option>
                              <option>SMA/SMK</option>
                          </select>
                      </div>

                      <div class="form-group form-group--select">
                          <select class="form-control">
                              <option>Kategori</option>
                              <option>Tempat Makan</option>
                              <option>Cleaning</option>
                              <option>Pengajar</option>
                              <option>Transportasi</option>
                          </select>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-link" data-dismiss="modal">Reset</button>
                      <button type="button" class="btn btn-link">Terapkan</button>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
