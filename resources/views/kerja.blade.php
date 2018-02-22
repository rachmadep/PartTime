@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Pengajar Indonesia Android Kejar')

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
                Lowongan Kerja
              </h2>
              <hr>
              <div class="list-group">
                {{-- row iklan --}}
                <div class="row iklan">
                  <div class="col-lg-4 col-md-4 col-xs-11 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/android-kejar.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-xs-11 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
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
                        <li>
                          <i class="zmdi zmdi-edit"></i> Pendidikan : SMA/SMK
                        </li>
                        <li>
                          <i class="zmdi zmdi-account"></i> Laki-Laki dan Perempuan
                        </li>
                        <li class="fee">
                          <i class="zmdi zmdi-local-offer"></i> Rp. 400.000 per hari
                        </li><br>
                        <li>
                          <i class="zmdi zmdi-view-list-alt"></i> Deskripsi :
                          <p>
                            Dibutuhkan Developer yang mahir dalam : <br>
                            1. Back-End dengan Django. <br>
                            2. Front-End dengan Ionic. <br><br>

                          </p>
                        </li>
                        <li>
                          <i class="zmdi zmdi-phone"></i> Kontak :
                          <p>
                            - Ardan (08588523323)<br>
                            - info@androidkejar.co.id
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-xs-11 aksi">
                    <div class="aksi-iklan">
                      <ul>
                        {{-- <li>
                          <a href="#" class="btn btn-success detail">Lihat</a>
                        </li> --}}
                        <li>
                          <a href="#" class="btn btn-primary apply" data-toggle="modal" data-target="#myModal">Apply</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- end row iklan --}}


              </div>
          </div>
        </div>{{-- End Terpopuler --}}
      </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">
                          Anda yakin Apply pada lowongan pekerjaan ini?
                          {{-- <small>Modal description</small> --}}
                      </h4>
                  </div>
                  {{-- <div class="modal-body">
                      ...
                  </div> --}}
                  <div class="modal-footer">
                      <button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-link">Ya</button>
                  </div>
              </div>
          </div>
      </div>

    </section>
@endsection
