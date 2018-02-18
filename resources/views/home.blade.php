@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Home')

@section('content')
    <section id="content">
      <div class="col-lg-3 col-md-3 col-xs-12">
        <div class="row profil">{{-- Profil --}}
          <div class="card widget-profile">
            <h2 class="card__header">
              Profil
            </h2>
            <div class="card__header card__header--highlight text-center">
              <img src="demo/img/profile-pics/profile-pic.jpg" class="widget-profile__img" alt="">
              <h2>Malinda Hollway</h2>
            </div>
            <div class="list-group list-group--striped">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#">
                    <button class="btn btn-default btn--icon-text" style="margin-bottom:10px"><i class="zmdi zmdi-account-circle"></i> Lihat Profil</button>
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
                  <a href="#" class="list-group-item media">
                      <div class="pull-left">
                          <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">Tempat Makan</div>
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
                Terpopuler
              </h2>
              <hr>
              <div class="list-group">
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-2 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-xs-7 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-3 aksi">
                    <div class="aksi-iklan">

                    </div>
                  </div>
                </div>

                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-2 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-xs-7 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                        {{-- <div class="nama-iklan"> --}}
                          Barista Antalogi
                        {{-- </div> --}}
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-3 aksi">
                    <div class="aksi-iklan">

                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>{{-- End Terpopuler --}}

        <div class="row lists">{{-- Terbaru --}}
          <div class="card">
              <h2 class="card__header">
                Terbaru
              </h2>
              <hr>
              <div class="list-group">
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-2 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-xs-7 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                        {{-- <div class="nama-iklan"> --}}
                          Barista Antalogi
                        {{-- </div> --}}
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-3 aksi">
                    <div class="aksi-iklan">

                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>{{-- End Terbaru --}}
      </div>

    </section>
@endsection
