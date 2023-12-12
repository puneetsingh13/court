<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href='{{ asset("assets/media/favicons/apple-touch-icon-180x180.png")}}'>
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css')}}">

  </head>

  <body>
    
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url("{{ asset('assets/media/photos/photo19@2x.jpg') }}")">
        
          <div class="row g-0 justify-content-center bg-primary-dark-op">
            <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
              <!-- Sign In Block -->
              <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                  <!-- Header -->
                  <div class="mb-2 text-center">
                    <a class="link-fx fw-bold fs-1" href="index.html">
                      <span class="text-dark">Cou</span><span class="text-primary">rt</span>
                    </a>
                    <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign In Form -->
                  <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <form method="POST" action="{{ route('auth') }}" >
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" autofocus>
                        <span class="input-group-text">
                          <i class="fa fa-user-circle"></i>
                        </span>
                        @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="input-group-text">
                          <i class="fa fa-asterisk"></i>
                        </span>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="login-remember-me" name="login-remember-me" checked>
                        <label class="form-check-label" for="login-remember-me">Remember Me</label>
                      </div>
                    </div>
                    <div class="text-center mb-4">
                      <button type="submit" class="btn btn-hero btn-primary">
                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                      </button>
                    </div>
                  </form>
                  <!-- END Sign In Form -->
                </div>
                <div class="block-content bg-body">
                  <div class="d-flex justify-content-center text-center push">
                    <a class="item item-circle item-tiny me-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
                    <a class="item item-circle item-tiny me-1 bg-xwork" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xwork.min.css')}}" href="#"></a>
                    <a class="item item-circle item-tiny me-1 bg-xmodern" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xmodern.min.css')}}" href="#"></a>
                    <a class="item item-circle item-tiny me-1 bg-xeco" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xeco.min.css')}}" href="#">'</a>
                    <a class="item item-circle item-tiny me-1 bg-xsmooth" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xsmooth.min.css')}}" href="#"></a>
                    <a class="item item-circle item-tiny me-1 bg-xinspire" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xinspire.min.css')}}" href="#"></a>
                    <a class="item item-circle item-tiny me-1 bg-xdream" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xdream.min.css')}}" href="#"></a>
                    <a class="item item-circle item-tiny me-1 bg-xpro" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xpro.min.css')}}" href="#">'</a>
                    <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xplay.min.css')}}" href="#"></a>
                  </div>
                </div>
              </div>
              <!-- END Sign In Block -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together assets/_js/main/app.js
    -->
    <scrip't src="{{ asset('assets/js/dashmix.app.min.js')}}"></script>

'    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="{{ asset('assets/js/lib/jquery.min.js')}}"></script>

 '   <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
  </body>
</html>
