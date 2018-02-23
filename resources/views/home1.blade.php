@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Home')
@section('header_styles')
  <!-- CSS -->
<link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endsection

@section('content')
    <section id="content">
      <div class="col-lg-3 col-md-3 col-xs-12">
        <div class="row profil">{{-- Profil --}}
          <div class="card widget-profile">
            <h2 class="card__header">
              Profil
            </h2>
            <div class="card__header card__header--highlight text-center">
              <img src="{{ asset('img/profil/profil.png') }}" class="widget-profile__img" alt="">
              <h2>Bagas Aji Pratama</h2>
            </div>
            <div class="list-group list-group--striped">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#">
                    <button class="btn btn-primary apply btn--icon-text" data-toggle="modal" data-target="#lengkapi" style="margin-bottom:10px"><i class="zmdi zmdi-plus-circle"></i> Lengkapi Profil</button>
                  </a>
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
                Terpopuler
              </h2>
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
                          <div class="kategori">
                            Tempat Makan
                          </div>
                      </a>
                      <div class="posting">
                        Dana Aji - 2 Februari 2018
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
                      <img src="{{ asset('img/pekerjaan/shoes.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="kerja" class="nama-iklan">
                        Shoe Polisher Shoes & Care
                        <div class="kategori">
                          Cleaning & Janitor
                        </div>
                      </a>
                      <div class="posting">
                        Bagus Putro - 7 Februari 2018
                      </div>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Jumat-Minggu, 13.00-20.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Jl. Asam Kranji No.3, Yogyakarta
                        </li>
                        <li class="fee">
                          <i class="zmdi zmdi-local-offer"></i> Rp. 80.000 per hari
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
                          <div class="kategori">
                            Tempat Makan
                          </div>
                      </a>
                      <div class="posting">
                        Dana Aji - 2 Februari 2018
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
                      <img src="{{ asset('img/pekerjaan/shoes.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-xs-8 deskripsi">
                    <div class="deskripsi-iklan">
                      <a href="kerja" class="nama-iklan">
                        Shoe Polisher Shoes & Care
                        <div class="kategori">
                          Cleaning & Janitor
                        </div>
                      </a>
                      <div class="posting">
                        Bagus Putro - 7 Februari 2018
                      </div>
                      <ul>
                        <li>
                          <i class="zmdi zmdi-calendar"></i> Jumat-Minggu, 13.00-20.00 WIB
                        </li>
                        <li>
                          <i class="zmdi zmdi-pin"></i> Jl. Asam Kranji No.3, Yogyakarta
                        </li>
                        <li class="fee">
                          <i class="zmdi zmdi-local-offer"></i> Rp. 80.000 per hari
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
                <div class="row">
                  <a href="#" class="btn btn-info selengkapny">Lihat Selengkapny</a>
                </div>
              </div>
          </div>
        </div>{{-- End Terbaru --}}
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
      <!-- Modal -->
      <div class="modal fade" id="lengkapi">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">
                          Lengkapi Profil
                          <small>Bagas Aji Pratama</small>
                      </h4>
                  </div>
                  <div class="modal-body">
                    <form class="" action="index.html" method="post">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-preview" data-trigger="fileinput"></div>

                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          <span class="btn btn-default btn-file">
                              <span class="fileinput-new">Pilih Foto Profil</span>
                              <span class="fileinput-exists">Ganti Foto Profil</span>
                              <input type="file" name="...">
                          </span>
                      </div>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                          <div class="form-group form-group--float">
                              <input type="text" class="form-control">
                              <label class="black">No Telepon</label>
                              <i class="form-group__bar"></i>
                          </div>
                      </div>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                              <div class="form-group">
                              <input type='text' class="form-control date-picker" placeholder="Tanggal Lahir">
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
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <span class="btn btn-default btn-file">
                              <span class="fileinput-new">Upload CV (Curriculum Vitae)</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="...">
                          </span>
                          <span class="fileinput-filename"></span>
                          <a href="#" class="fileinput__close fileinput-exists" data-dismiss="fileinput">
                              <i class="zmdi zmdi-close-circle"></i>
                          </a>
                      </div>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                          <div class="form-group form-group--float">
                              <input type="text" class="form-control">
                              <label class="black">Link Lampiran</label>
                              <i class="form-group__bar"></i>
                          </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-link">Simpan</button>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection

@section('page_js')
  <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
@endsection
