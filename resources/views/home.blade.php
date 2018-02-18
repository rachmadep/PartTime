@extends('layouts.master')

{{-- Page title --}}
@section('title', 'Home')

@section('content')
    <section id="content">
      <div class="col-lg-3 col-md-3 col-xs-12">
        <div class="row profil">
          <!-- Profile -->
          <div class="card widget-profile">
              <div class="card__header card__header--highlight text-center">
                  <img src="demo/img/profile-pics/profile-pic.jpg" class="widget-profile__img" alt="">
                  <h2>Malinda Hollway</h2>

                  {{-- <div class="actions">
                      <div class="dropdown">
                          <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                          <ul class="dropdown-menu pull-right">
                              <li><a href="">Refresh</a></li>
                              <li><a href="">Manage</a></li>
                              <li><a href="">Settings</a></li>
                          </ul>
                      </div>
                  </div> --}}
              </div>

              <div class="list-group list-group--striped">
                  <div class="list-group-item media">
                      <div class="pull-left">
                          <div class="avatar-char"><i class="zmdi zmdi-phone"></i></div>
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">011 55694785</div>
                          <small class="list-group__text">Home</small>
                      </div>
                  </div>
                  <div class="list-group-item media">
                      <div class="pull-left">
                          <div class="avatar-char"><i class="zmdi zmdi-email"></i></div>
                      </div>
                      <div class="media-body">
                          <div class="list-group__heading">m-hollaway@gmail.com</div>
                          <small class="list-group__text">Email</small>
                      </div>
                  </div>
              </div>
          </div>
        </div>{{-- End Profil --}}
        <div class="row kategori">
          <div class="card">
              {{-- <div class="card__header"> --}}
                  <h2 class="card__header">Kategori <small></small></h2>
                  {{-- <div class="actions">
                      <div class="dropdown">
                          <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                          <ul class="dropdown-menu pull-right">
                              <li><a href="">Refresh</a></li>
                              <li><a href="">Manage</a></li>
                              <li><a href="">Settings</a></li>
                          </ul>
                      </div>
                  </div> --}}
              {{-- </div> --}}

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
      </div>
      <div class="col-lg-9 col-md-9 col-xs-12">
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

        </div>
        <!--  -->


      </div>

    </section>
@endsection
