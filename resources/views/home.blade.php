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
              <h2>Bagas Aji Pratama</h2>
            </div>
            <div class="list-group list-group--striped">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#">
                    <button class="btn btn-primary apply btn--icon-text" style="margin-bottom:10px"><i class="zmdi zmdi-account-circle"></i> Lihat Profil</button>
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
                Terpopuler
              </h2>
              <hr>
              <div class="list-group">
                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Senin-Kamis, 06.00-10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
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

                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Senin-Kamis, 06.00-10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
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

                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Senin-Kamis, 06.00-10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
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
                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Senin-Kamis, 06.00-10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
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
                <div class="row">
                  <a href="#" class="btn btn-info selengkapny">Lihat Selengkapny</a>
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
                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Senin-Kamis, 06.00-10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
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
                {{-- row iklan --}}
                <div class="row list-iklan">
                  <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                    <div class="gambar-iklan">
                      <img src="{{ asset('img/pekerjaan/barista.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="#" class="nama-iklan">
                          Barista Antalogi
                      </a>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Senin-Kamis, 06.00-10.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Co-Working Space Antologi
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
                <div class="row">
                  <a href="#" class="btn btn-info selengkapny">Lihat Selengkapny</a>
                </div>
              </div>
          </div>
        </div>{{-- End Terbaru --}}
      </div>

    </section>
@endsection
