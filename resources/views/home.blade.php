 @extends('layouts.master')

@section('header')
{{-- <header id="header2">
  <ul class="tab-nav tab-nav--justified tab-nav--icon">
      <li class="active">
          <a class="col-xs-4" href="#tab-2" data-toggle="tab">
              <i class="zmdi zmdi-globe icon-tab"></i><p class=""> Home</p>
          </a>
      </li>
      <li>
          <a class="col-xs-4" href="#tab-5" data-toggle="tab">
              <i class="zmdi zmdi-account icon-tab"></i><p class=""> Profil</p>
          </a>
      </li>
  </ul>
</header> --}}
@endsection

@section('content')
    <section id="content">
        <div class="tab-content">
            <div class="tab-pane fade" id="tab-1">
              <div class="card">
                  <div class="card__body">
                    <div class="btn-demo clearfix">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <button class="btn btn-lg col-xs-12 bg-danger" data-toggle="modal" data-target="#kecelakaan">
                          <i class="zmdi zmdi-alert-polygon"></i> Kecelakaan
                        </button>
                        <button class="btn btn-lg col-xs-12 bg-danger" data-toggle="modal" data-target="#kebakaran"><i class="zmdi zmdi-fire"></i> Kebakaran</button>
                        <button class="btn btn-lg col-xs-12 bg-danger" data-toggle="modal" data-target="#tawuran"><i class="zmdi zmdi-walk"></i> Tawuran & Keributan</button>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <button class="btn btn-lg col-xs-12 bg-warning" data-toggle="modal" data-target="#pencurian"><i class="zmdi zmdi-lock-open"></i> Pencurian</button>
                        <button class="btn btn-lg col-xs-12 bg-warning" data-toggle="modal" data-target="#meresahkan"><i class="zmdi zmdi-accounts-outline"></i> Gerakan & Organisasi Meresahkan</button>
                        <button class="btn btn-lg col-xs-12 bg-warning" data-toggle="modal" data-target="#orangHilang"><i class="zmdi zmdi-face"></i> Orang Hilang</button>
                        <button class="btn btn-lg col-xs-12 bg-warning" data-toggle="modal" data-target="#penipuan"><i class="zmdi zmdi-money-box"></i> Penipuan</button>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <button class="btn btn-lg col-xs-12 bg-primary" data-toggle="modal" data-target="#pln"><i class="zmdi zmdi-flash"></i> PLN</button>
                        <button class="btn btn-lg col-xs-12 bg-primary" data-toggle="modal" data-target="#pdam"><i class="zmdi zmdi-format-color-reset"></i> PDAM</button>
                        <button class="btn btn-lg col-xs-12 bg-primary" data-toggle="modal" data-target="#layananPublik"><i class="zmdi zmdi-library"></i> Pengaduan Pelayanan Publik</button>
                        <button class="btn btn-lg col-xs-12 bg-primary" data-toggle="modal" data-target="#fasilitasUmum"><i class="zmdi zmdi-nature-people"></i> Fasilitas Umum</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Kecelakaan -->
                <div class="modal fade" id="kecelakaan">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    Lapor
                                    <small>Kecelakaan</small>
                                </h4>
                            </div>
                            <div class="modal-body">
                              <div class="input-group input-group-lg">
                                  <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                  <div class="form-group">
                                      <input type="text" class="form-control input-lg col-xs-12" placeholder="Lokasi">
                                      <i class="form-group__bar"></i>
                                  </div>
                              </div>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505883.0367653967!2d110.14408472068432!3d-7.872953532558733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x6d1b92b2cac8b3f0!2sDaerah+Istimewa+Yogyakarta!5e0!3m2!1sid!2sid!4v1493442039348" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>


                              <div class="input-group input-group-lg">
                                  <span class="input-group-addon"><i class="zmdi zmdi-alarm"></i></span>
                                  <div class="form-group">
                                      <input type="text" class="form-control input-lg  col-xs-12 col-sm-12 col-lg-6" placeholder="Waktu">
                                      <i class="form-group__bar"></i>
                                  </div>

                                  <span class="input-group-addon"><i class="zmdi zmdi-accounts"></i></span>
                                  <div class="form-group">
                                      <input type="text" class="form-control input-lg  col-xs-12 col-sm-12 col-lg-6" placeholder="Jumlah Korban">
                                      <i class="form-group__bar"></i>
                                  </div>
                                </div>

                                <div class="form-group m-t-20">
                                    <textarea class="form-control" rows="4" placeholder="Kronologi (opsional)"></textarea>
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="input-group input-group-lg">
                                  <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-preview" data-trigger="fileinput"></div>

                                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                                      <span class="btn btn-default btn-file">
                                          <span class="fileinput-new">Masukkan Gambar</span>
                                          <span class="fileinput-exists">Ganti Gambar</span>
                                          <input type="file" name="...">
                                      </span>
                                  </div>
                                </div>

                                <div class="form-group kiri">
                                  <label style="text-align: right;">Tampilkan di Beranda</label>
                                    <div class="toggle-switch">
                                        <input type="checkbox" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-link">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Kecelakaan -->
            </div>
            {{-- End tab1 --}}

            <div class="tab-pane fade in active" id="tab-2">
              <div class="card">
                <div class="card__header">
                    <div class="media">

                        <div class="pull-left">
                            <img class="avatar-img" src="img/profile.jpg" alt="">
                        </div>

                        <div class="media-body">
                            <h2>Sofyan Aji Nugraha <small>30 April 2017 - 07:54</small></h2>
                        </div>

                        <div class="info">
                          <h2 class="status kuning"><i class="zmdi zmdi-mood" data-toggle="tooltip" data-placement="left" title="Sedang diproses"></i></h2><br>
                          <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-local-offer"></i> Kebakaran</button>
                        </div>

                    </div>
                </div>
                <div class="card__body">

                  <div class="col-xs-12 col-sm-6">
                    <p><i class="zmdi zmdi-pin"></i> Lokasi : <a href="https://www.google.co.id/maps/place/Kings+Electronics/@-7.8021113,110.3458048,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a57f14d56e173:0x8162dd6f461d5b94!8m2!3d-7.8021166!4d110.3479935?hl=id">Kings Electronics, Jogja, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</a></p>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>
                  </div>

                  <div class="col-xs-12 col-sm-6">
                    <img class="posting" src="img/kebakaran-di-kings_2406.jpg" alt="">
                  </div>

                    <div class="wall__attrs">
                        <div class="wall__stats">
                            <span><i class="zmdi zmdi-comments"></i> 36</span>
                        </div>
                    </div>
                </div>

                <div class="wall__comments">

                          <div class="wall__comments__lists">
                              <div class="media">
                                  <a href="" class="pull-left"><img src="demo/img/profile-pics/5.jpg" alt="" class="avatar-img"></a>

                                  <div class="media-body">
                                      <a>Dana Styaji</a> <small class="m-l-10">3 mins ago...</small>
                                      <p>Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>

                                      <div class="actions">
                                          <div class="dropdown">
                                              <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                              <ul class="dropdown-menu pull-right">
                                                  <li><a href="">Report</a></li>
                                                  <li><a href="">Delete</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="media">
                                  <a href="" class="pull-left">
                                      <img src="demo/img/profile-pics/4.jpg" alt="" class="avatar-img">
                                  </a>

                                  <div class="media-body">
                                      <a>Bagas Aji Pratama</a> <small class="m-l-10">3 mins ago...</small>
                                      <p>Curabitur in arcu quis nulla aliquam condimentum.</p>

                                      <div class="actions">
                                          <div class="dropdown">
                                              <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                              <ul class="dropdown-menu pull-right">
                                                  <li><a href="">Report</a></li>
                                                  <li><a href="">Delete</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <input placeholder="Write something...">
                      </div>

                </div>
                <!--  -->

                <div class="card">
                      <div class="card__header">
                          <div class="media">
                              <div class="pull-left">
                                  <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                              </div>

                              <div class="media-body">
                                  <h2>Edward Chakim <small>30 April 2017 - 07:28</small></h2>
                              </div>
                              <div class="info">
                                <h2 class="status merah"><i class="zmdi zmdi-mood-bad" data-toggle="tooltip" data-placement="left" title="Belum diproses"></i></h2><br>
                                <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-local-offer"></i> Layanan Publik</button>
                              </div>
                          </div>
                      </div>

                      <div class="card__body">
                          <p>Aliquam vel sem ut ligula posuere viverra. Ut dolor nisi, fringilla quis consectetur maximus, finibus vel diam. Duis condimentum, diam in semper congue, tortor orci condimentum urna</p>

                          <div class="wall__attrs">
                              <div class="wall__stats">
                                  <span><i class="zmdi zmdi-comments"></i> 0</span>
                              </div>

                          </div>
                      </div>

                      <div class="wall__comments">
                        <div class="wall__comments__lists">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="demo/img/profile-pics/4.jpg" alt="" class="avatar-img">
                                </a>

                                <div class="media-body">
                                    <a>Sidex</a> <small class="m-l-10">3 mins ago...</small>
                                    <p>Curabitur in arcu quis nulla aliquam condimentum.</p>
                                </div>
                            </div>
                        </div>
                          <input placeholder="Write something...">

                      </div>
                  </div>
                  <!--  -->

                  <div class="card">
                    <div class="card__header">
                        <div class="media">
                            <div class="pull-left">
                                <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                            </div>

                            <div class="media-body">
                                <h2>Bagas Aji Pratama <small>30 April 2017 - 07:24</small></h2>
                            </div>
                            <div class="info">
                              <h2 class="status hijau"><i class="zmdi zmdi-mood" data-toggle="tooltip" data-placement="left" title="Terselesaikan"></i></h2><br>
                              <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-local-offer"></i> Tawuran</button>
                            </div>
                        </div>
                    </div>
                    <div class="card__body">

                      <div class="col-xs-12 col-sm-6">
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>
                      </div>

                      <div class="col-xs-12 col-sm-6">
                        <img class="posting" src="demo/img/headers/4.png" alt="">
                      </div>

                        <div class="wall__attrs">
                            <div class="wall__stats">
                                <span><i class="zmdi zmdi-comments"></i> 36</span>
                            </div>
                        </div>
                    </div>

                    <div class="wall__comments">

                              <div class="wall__comments__lists">
                                  <div class="media">
                                      <a href="" class="pull-left"><img src="demo/img/profile-pics/5.jpg" alt="" class="avatar-img"></a>

                                      <div class="media-body">
                                          <a>David Nathan</a> <small class="m-l-10">3 mins ago...</small>
                                          <p>Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>
                                      </div>
                                  </div>

                                  <div class="media">
                                      <a href="" class="pull-left">
                                          <img src="demo/img/profile-pics/4.jpg" alt="" class="avatar-img">
                                      </a>
                                      <div class="media-body">
                                          <a>Sam Anderson</a> <small class="m-l-10">3 mins ago...</small>
                                          <p>Curabitur in arcu quis nulla aliquam condimentum.</p>
                                      </div>
                                  </div>
                              </div>
                            <input placeholder="Write something...">
                          </div>
                    </div>


            </div>

            <div class="tab-pane fade" id="tab-5">
              <div class="card">

                  <div class="card__header">
                    <div class="top-menu__profile2 dropdown">
                        <a data-toggle="dropdown" href="">
                            <img src="img/profile.jpg" class="center-block" alt="">

                        </a><i>Sofyan Aji Nugraha</i>


                        <ul class="dropdown-menu pull-right dropdown-menu--icon">
                            <li>
                                <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                  </div>

                  <div class="card__body">
                    <div class="grup clearfix">

                        <div class="btn btn-default col-xs-12 col-sm-12 col-lg-12 m-b-10">
                          1 Total Laporan
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-4 m-b-5">
                          <button class="btn btn-success col-xs-12 col-sm-12 col-lg-12">0 Laporan Terselesaikan</button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-4 m-b-5">
                          <button class="btn btn-warning col-xs-12 col-sm-12 col-lg-12">1 Laporan Sedang Diproses</button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-4 m-b-5">
                          <button class="btn btn-danger col-xs-12 col-sm-12 col-lg-12">0 Laporan Belum Diproses</button>
                        </div>

                    </div>

                  </div>

              </div>

            </div>

        </div>
    </section>
@endsection
