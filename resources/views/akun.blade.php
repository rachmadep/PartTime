@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Profil')

@section('content')
    <section id="content">
      <div class="col-lg-3 col-md-3 col-xs-12">
        <div class="row profil">{{-- Profil --}}
          <div class="card widget-profile">
            <h2 class="card__header">
              Profil
            </h2>
            <div class="card__header card__header--highlight text-center">
              <img src="{{ asset('img/profil/bagas.png') }}" class="widget-profile__img" alt="">
              <h2>Bagas Aji Pratama</h2>
            </div>
            <div class="row">
              <table class="table table-hover">
                <tr>
                  <td>Tanggal Lahir</td>
                  <td>20 Juli 1997</td>
                </tr>
                <tr>
                  <td>Pendidikan</td>
                  <td>SMA</td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>Mahasiswa</td>
                </tr>
                <tr>
                  <td>E-Mail</td>
                  <td>bagas@gmail.com</td>
                </tr>
                <tr>
                  <td>No Telepon</td>
                  <td>08812345678</td>
                </tr>
              </table>
            </div>
            <div class="list-group list-group--striped">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#">
                    <button class="btn btn-primary apply btn--icon-text" style="margin-bottom:10px"><i class="zmdi zmdi-account-circle"></i> Edit Akun</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>{{-- End Profil --}}

        <div class="row kategori">{{-- Kategori --}}
          <div class="card">
              <h2 class="card__header">
                Lampiran
              </h2>
              <div class="list-group">
                  <div class="row">
                    <div class="link">
                      Link
                    </div>
                    <div class="link2">
                      <a href="#">https://id.linkedin.com/in/bagasaji</a>
                    </div>
                  </div>
              </div><hr>
              <div class="list-group">
                  <div class="row">
                    <div class="link">
                      CV (Curriculum Vitae)
                    </div>
                    <div class="cv">
                      <img src="{{ asset('img/cv.png') }}" alt="">
                    </div>
                  </div>
              </div><hr>
              <div class="list-group list-group--striped">
                <div class="row">
                  <div class="col-xs-12">
                    <a href="#">
                      <button class="btn btn-primary apply btn--icon-text" style="margin-bottom:10px"><i class="zmdi zmdi-account-circle"></i> Edit Lampiran</button>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>{{-- End Kategori --}}
      </div>{{-- End Left Side --}}

      <div class="col-lg-9 col-md-9 col-xs-12">{{-- Right Side --}}
        <div class="row lists">{{-- Terpopuler --}}
          <div class="card">
              <h2 class="card__header">
                Riwayat
              </h2>
              <hr>
              <div class="list-group">
                {{-- row iklan --}}
                <div class="row iklan notifikasi">
                  <div class="judul-notif">
                    Bekerja <small>. 28 Februari 2018</small>
                  </div>
                  <div class="isi-notif">
                    Anda sedang bekerja di Shoe Polisher Shoes & Care :
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
                </div><hr>
                {{-- end row iklan --}}

                {{-- row iklan --}}
                <div class="row iklan notifikasi">
                  <div class="judul-notif">
                    Apply <small>. 15 Februari 2018</small>
                  </div>
                  <div class="isi-notif">
                    Anda melakukan apply untuk bekerja di bekerja di Shoe Polisher Shoes & Care :
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
                </div><hr>
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
