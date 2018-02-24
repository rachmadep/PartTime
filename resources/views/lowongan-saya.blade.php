@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Lowongan Saya')

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
                Lowongan Kerja Saya
              </h2>
              <a href="tambah-lowongan" class="btn btn-info tambah filter"><i class="zmdi zmdi-plus-circle"></i> Tambah Lowongan</a>
              <hr>
              <div class="list-group">
                {{-- row iklan --}}
                @if (!is_null($lowongan))
                  <div class="row list-iklan">
                    <div class="col-lg-2 col-md-2 col-xs-3 gambar">
                      <div class="gambar-iklan">
                        <img src="/img/profil/{!! $lowongan->foto !!}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                      <div class="deskripsi-iklan">
                        <a href="kerja" class="nama-iklan">
                          {!! $lowongan->judul !!}
                          <div class="kategori">
                            {!! $lowongan->kategori !!}
                          </div>
                        </a>
                        <div class="posting">
                        24 Februari 2018
                        </div>
                        <ul>
                          <li>
                            <i class="zmdi zmdi-calendar"></i> {!! $lowongan->hari !!}
                          </li>
                          <li>
                            <i class="zmdi zmdi-pin"></i> {!! $lowongan->lokasi !!}
                          </li>
                          <li class="fee">
                            <i class="zmdi zmdi-local-offer"></i> Rp. {!! $lowongan->gaji !!}
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-1 col-md-1 col-xs-12 aksi">
                      <div class="aksi-iklan">
                        <ul>
                          <li>
                            <a href="kerja/{{ $lowongan->id }}" class="btn btn-success detail">Lihat Detail</a>
                          </li>
                          <li>
                            <a href="#" class="btn btn-primary apply">Lihat Pelamar</a>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div>
                @endif
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
                          <div class="kategori">
                            Tempat Makan
                          </div>
                      </a>
                      <div class="posting">
                        2 Januari 2018
                      </div>
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
                          <a href="#" class="btn btn-success detail">Lihat Detail</a>
                        </li>
                        <li>
                          <a href="#" class="btn btn-primary apply">Lihat Pelamar</a>
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
                        5 Desember 2017
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
                          <a href="#" class="btn btn-success detail">Lihat Detail</a>
                        </li>
                        <li>
                          <a href="pelamar" class="btn btn-primary apply">Lihat Pelamar</a>
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
