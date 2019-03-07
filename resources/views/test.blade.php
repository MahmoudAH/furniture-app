<!--Section: Contact v.1-->
<section class="section pb-5">

  <!--Section heading-->
  <h2 class="section-heading h1 pt-4">اتصل بنا</h2>
  <!--Section description-->
  <p class="section-description pb-4">لا تتردد ف الاتصال بنا في لااي ةقت سنكون في انتظار رسالتك .</p>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fa fa-envelope"></i> ارسل لنا طلبك:</h3>
          </div>

          <p></p>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-name"> الاسم</label>
            <input type="text" id="form-name" class="form-control">

          </div>

          <div class="md-form">
            <label for="form-email">الايميل</label>
            <input type="text" id="form-email" class="form-control">

          </div>

          <div class="md-form">
            <label for="form-Subject"> العنوان </label>
            <input type="text" id="form-Subject" class="form-control">

          </div>

          <div class="md-form">

            <label for="form-text"> الموضوع</label>
            <textarea type="text" id="form-text" class="form-control md-textarea" rows="3"></textarea>

          </div>

          <div class="text-center mt-4">
            <button class=" btn btn-primary "> ارسال </button>
          </div>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px;" >
        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-map-marker fa-2x" style="padding:15px;background-color:#475F77;color:#fff;border-radius:100%"></i></a>
          <p style="padding-top:10px">مصر الجديده , CA 94126</p>
          <p>ميدان الجيش</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-phone fa-2x" style="padding:15px;background-color:#475F77;color:#fff;border-radius:100%"></i></a>
          <p style="padding-top:10px">+ 01 234 567 89</p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1" style="margin-bottom:6px"><i class="fa fa-envelope fa-2x" style="padding:15px;background-color:#475F77;color:#fff;border-radius:100%"></i></a>
          <p style="padding-top:10px">info@gmail.com</p>
          <p>sale@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.1-->



<i class="fa fa-map-marker fa-4x" aria-hidden="true" style="color:#fff;padding:15px;background-color:#4bc2c5;border-radius:100%;"></i
<i class="fa fa-phone" aria-hidden="true" style="color:#fff;padding:15px;background-color:#4bc2c5;border-radius:100%;"></i>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الفرسان
       |
       @yield('title')
     </title>

    <!-- Scripts -
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    -->
    <!--new head-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الفرسان
       |
       @yield('title')
     </title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <link rel="{{ asset('stylesheet')}}" href="css/font-awesome.min.css">
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</head>
<body style="text-align:left">
   <div id="app">
      <!--begin of nav content-->
      <div class="header">
        <div class="container"> <a class="navbar-brand" href="index.html"><i class="fa fa-paper-plane"></i> ONE</a>
          <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
              <li class="current"><a href="index.html">Home</a></li>
              <li><a href="{{ url('test') }}">About Us</a></li>
              <li><a href="{{ url('test2') }}">Services</a></li>
              <li><a href="{{ route('login') }}">Contact Us</a></li>
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}"> login </a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">register </a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
              <div class="clear"></div>
            </ul>

          </div>
        </div>
      </div>  <!--end of nav content-->
        <!--
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar

                    <ul class="nav nav-pills  pull-right">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">الصفحه الرئيسيه </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">من نحن </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">خدماتنا </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">اتصل بنا </a>
                      </li>

                    </ul>

                    <!-- Right Side Of Navbar -
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">تسجيل دخول </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">تسجيل عضويه </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>-->

        <main class="py-4">
            @yield('content')
        </main>
     </div>
    <script src="{{ asset('js/responsive-nav.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.flexslider.js')}}"></script>
    @yield('scripts')
</body>
</html>
