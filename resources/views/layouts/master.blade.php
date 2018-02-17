<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#2baaba">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | PartTime</title>

        <!-- Vendors -->
        <!-- Animate CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <!-- Material Design Icons -->
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <!-- Malihu Scrollbar -->
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <!-- Full Calendar -->
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <!-- Site CSS -->
        <link href="css/app.css" rel="stylesheet">
        <!-- Page loader -->
        {{-- <script src="js/page-loader.min.js"></script> --}}

        @yield('header_styles')
    </head>

    <body>
      <!-- Page Loader -->
      {{-- <div id="page-loader">
          <div class="preloader preloader--xl preloader--blue">
              <svg viewBox="25 25 50 50">
                  <circle cx="50" cy="50" r="20" />
              </svg>
          </div>
      </div> --}}

      <!-- Header -->
    <div class="header">
      <header id="header">
          <div class="menu">
            <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
          </div>

          <div class="logo">
              <a href="/" class="hidden-xs">
                  PartTime
              </a>
          </div>

          <ul class="top-menu">

              <!-- Search -->
              <li class="top-menu__trigger">
                  <a href=""><i class="zmdi zmdi-search"></i></a>
              </li>

              <!-- Profil -->
              <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                  <a href=""><i class="zmdi zmdi-notifications"></i></a>
              </li>
          </ul>

          <form class="top-search">
              <input type="text" class="top-search__input" placeholder="Search">
              <i class="zmdi zmdi-search top-search__reset"></i>
          </form>

      </header>
@yield('header')

    </div>


      <section id="main">
        <aside id="notifications">
          <div class="navigation__header">
              <i class="zmdi zmdi-long-arrow-right" data-mae-action="block-close"></i>
          </div>

              <ul class="tab-nav tab-nav--justified tab-nav--icon">
                  <li class=""><a class="user-alert__notifications" href="#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
              </ul>

              <div class="tab-content">
                  <div class="tab-pane active" id="notifications__updates">
                      <div class="list-group">
                          <a href="" class="list-group-item media">
                              <div class="pull-left">
                                  <h2 class="status kuning"><i class="zmdi zmdi-mood"></i></h2>
                              </div>

                              <div class="media-body">
                                  <div class="list-group__heading">Laporan Sedang Diproses</div>
                                  <small class="list-group__text">Mohon tunggu tindak lanjut pihak terkait.</small>
                              </div>
                          </a>

                          <a href="" class="list-group-item media">
                              <div class="pull-left">
                                  <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                              </div>
                              <div class="media-body">
                                  <div class="list-group__heading">Dana Setyaji</div>
                                  <small class="list-group__text">Mengomentari laporan Anda.</small>
                              </div>
                          </a>

                          <a href="" class="list-group-item media">
                              <div class="pull-left">
                                  <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                              </div>
                              <div class="media-body">
                                  <div class="list-group__heading">Bagas Aji Pratama</div>
                                  <small class="list-group__text">Mengomentari laporan Anda.</small>
                              </div>
                          </a>

                      </div>
                  </div>
              </div>
          </aside>

          <aside id="navigation">
              <div class="navigation__header">
                  <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
              </div>

              <div class="top-menu__profile dropdown">
                  <a data-toggle="dropdown" href="">
                      <img src="img/profile.jpg" alt="">

                  </a><i>Sofyan Aji Nugraha</i>


                  <ul class="dropdown-menu pull-right dropdown-menu--icon">
                      <li>
                          <a href=""><i class="zmdi zmdi-account"></i> View Profile</a>
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


              <div class="navigation__menu c-overflow">
                  <ul>
                      <li><a href="/"><i class="zmdi zmdi-home"></i> Home</a></li>
                      <li><a href="rumah-sakit"><i class="zmdi zmdi-hospital-alt"></i> Alamat Rumah Sakit</a></li>
                      <li><a href="rumah-sakit"><i class="zmdi zmdi-shield-security"></i> Alamat Kantor Polisi</a></li>
                      <li><a href=""><i class="zmdi zmdi-pin"></i> Alamat Instansi</a></li>
                      <li><a href=""><i class="zmdi zmdi-phone"></i> No. Telepon Penting</a></li>



                      <!-- <li class="navigation__sub">
                          <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                          <ul>
                              <li><a href="profile-timeline.html">Profile</a></li>
                              <li><a href="list-view.html">List View</a></li>
                              <li><a href="messages.html">Messages</a></li>
                              <li><a href="pricing-table.html">Pricing Table</a></li>
                              <li><a href="contacts.html">Contacts</a></li>
                              <li><a href="wall.html">Wall</a></li>
                              <li><a href="invoice.html">Invoice</a></li>
                              <li><a href="login.html">Login and Sign Up</a></li>
                              <li><a href="lockscreen.html">Lockscreen</a></li>
                              <li><a href="404.html">Error 404</a></li>
                          </ul>
                      </li> -->
                  </ul>
              </div>
          </aside>

    @yield('content')


  </section>


      <!-- Older IE Warning -->
      <!--[if lt IE 9]>
          <div class="ie-warning">
              <h1>Warning!!</h1>
              <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
              <div class="ie-warning__container">
                  <ul class="ie-warning__download">
                      <li>
                          <a href="http://www.google.com/chrome/">
                              <img src="img/browsers/chrome.png" alt="">
                              <div>Chrome</div>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.mozilla.org/en-US/firefox/new/">
                              <img src="img/browsers/firefox.png" alt="">
                              <div>Firefox</div>
                          </a>
                      </li>
                      <li>
                          <a href="http://www.opera.com">
                              <img src="img/browsers/opera.png" alt="">
                              <div>Opera</div>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.apple.com/safari/">
                              <img src="img/browsers/safari.png" alt="">
                              <div>Safari</div>
                          </a>
                      </li>
                      <li>
                          <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                              <img src="img/browsers/ie.png" alt="">
                              <div>IE (New)</div>
                          </a>
                      </li>
                  </ul>
              </div>
              <p>Sorry for the inconvenience!</p>
          </div>
      <![endif]-->


      <!-- Javascript Libraries -->

      <!-- jQuery -->
      <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

      <!-- Bootstrap -->
      <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

      <!-- Malihu ScrollBar -->
      <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

      <!-- Bootstrap Notify -->
      <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

      <!-- Moment -->
      <script src="vendors/bower_components/moment/min/moment.min.js"></script>

      <!-- FullCalendar -->
      <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

      <!-- Simple Weather -->
      <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

      <!-- Salvattore -->
      <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>

      <!-- Flot Charts -->
      <script src="vendors/bower_components/flot/jquery.flot.js"></script>
      <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
      <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>

      <!-- Sparkline Charts -->
      <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>

      <!-- EasyPie Charts -->
      <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

      <!-- Placeholder for IE9 -->
      <!--[if IE 9 ]>
          <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
      <![endif]-->

      <!-- Demo Only -->
      <script src="demo/js/flot-charts/curved-line.js"></script>
      <script src="demo/js/flot-charts/line.js"></script>
      <script src="demo/js/easy-pie-charts.js"></script>
      <script src="demo/js/misc.js"></script>
      <script src="demo/js/sparkline-charts.js"></script>
      <script src="demo/js/calendar.js"></script>

      <!-- Site Functions & Actions -->
      <script src="js/app.min.js"></script>
  </body>
</html>
