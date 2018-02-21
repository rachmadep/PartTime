@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Interview')

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
                Notification
              </h2>
              <hr>
              <div class="list-group">
                {{-- row iklan --}}
                <div class="row iklan notifikasi">
                  <div class="judul-notif">
                    Interview <small>. 20 Februari 2018</small>
                  </div>
                  <div class="isi-notif">
                    Selamat, Anda diundang interview oleh Shoe Polisher Shoes & Care :
                  </div><br>
                  <div class="col-lg-2 col-md-2 col-xs-11 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/shoes.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-xs-11 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                        Shoe Polisher Shoes & Care
                        <div class="kategori">
                          Cleaning & Janitor
                        </div>
                      </a><br>
                      <div class="isi-notif2">
                        Waktu dan Tempat :
                      </div>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Jumat, 23 Februari 2018
                        </li>
                        <li>
                          <i class="zmdi zmdi-time"></i> 10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Gedung EDS Jalan Asam Kranji, Yogyakarta
                        </li><br>
                        <li>
                          <i class="zmdi zmdi-view-list-alt"></i> Yang perlu disiapkan untuk interview :
                          <p>
                            1. CV (Curriculum Vitae) <br>
                            2. Data Diri <br><br>

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
                        <li>
                          <a href="#" class="btn btn-danger danger">Reject</a>
                        </li>
                        <li>
                          <a href="#" class="btn btn-primary apply">Accept</a>
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

    </section>
@endsection
