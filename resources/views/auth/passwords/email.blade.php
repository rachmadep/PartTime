<!DOCTYPE html>
<html lang="en">
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#2baaba">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png"  href="{{ asset('img/favicon.png') }}">
        <title>Login | PartTime</title>

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
        <!-- Material Design Icons -->
        <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
        <!-- Site CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

      <!-- <div id="page-loader">
          <div class="preloader preloader--xl preloader--blue">
              <svg viewBox="25 25 50 50">
                  <circle cx="50" cy="50" r="20" />
              </svg>
          </div>
      </div> -->

      <!-- particles.js container -->
      <div id="particles-js">

        {{-- <div class="header col-lg-12">
              <div class="hidden-xs">
                  <h1 class="logo-log">
                      PartTime
                  </h1>
              </div>
        </div> --}}

        <div class="login">

            <!-- Login -->
            <div class="login__block toggled" id="l-login">
                <div class="login__block__header">

                  <div class="row">
                    <img src="{{ URL::asset('/img/logo.png') }}" alt="">
                    {{-- <i class="zmdi zmdi-account-circle"></i> --}}

                  </div>
                  <div class="actions login__block__actions">
                      <div class="dropdown">
                          <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                          <ul class="dropdown-menu pull-right">
                              <li><a data-block="#l-register" href="">Create an account</a></li>
                              <li><a data-block="#l-forget-password" href="">Forgot password?</a></li>
                          </ul>
                      </div>
                  </div>
                </div>

                <div class="login__block__body">
                    Masukkan E-mail dan Password
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group--float form-group--centered">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <label>E-Mail</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group">
                            <div class="">
                              <button type="submit" class="btn btn-default btn-login">
                                  Kirim link reset password
                              </button>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="">
                            Belum Punya Akun?<a class="btn-link-login" href="{{ route('register') }}">
                                Daftar
                            </a>
                          </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
      </div>

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
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app2.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site Functions & Actions -->
        <script src="{{ asset('js/app.min.js') }}"></script>
    </body>
</html>
