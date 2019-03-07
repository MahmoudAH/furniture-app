<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="direction:rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الفرسان
       |
       @yield('title')
     </title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
       rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" rel="stylesheet"></link>
    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.1.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
    .map-container-6{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    }
    .map-container-6 iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
    }
    .md-form label{
      position: absolute;
    top: .65rem;
    right: 0;
    -webkit-transition: .2s ease-out;
    -o-transition: .2s ease-out;
    transition: .2s ease-out;
    cursor: text;
    color: #757575;
    }
    .text-md-left {
        text-align: right !important;
    }

    </style>

    @yield('styles')
</head>
<body style="text-align:right;direction: rtl;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav nav-pills  pull-right">
                      <li class="nav-item active">
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('home') }}">الصفحه الرئيسيه </a>
                      </li>
                      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle rtl {{ Request::is('services/*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
          خدماتنا
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="float: right;text-align: right;">
          <a class="dropdown-item " href="{{ route('service1') }}"> تغليف الاثاث </a>
          <a class="dropdown-item" href="{{ route('service2') }}"> نقل الاثاث </a>
          <a class="dropdown-item" href="{{ route('service3') }}"> فك وتركيب الاثاث </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"> ونش رفع الاثاث </a>
        </div>
      </li>


                      <li class="nav-item">
                        <a class="nav-link" href="#">من نحن </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ url('services') }}">خدماتنا </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">اتصل بنا </a>
                      </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-info" href="{{ route('login') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل دخول 
                                           </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary" href="{{ route('register') }}">تسجيل عضويه </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="float: right;text-align: right;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out" aria-hidden="true" style="padding-right:0px;margin-right:0px;padding-left:5px"></i>
                                                      تسجبل خروج
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
        </nav>

        <main>
            @yield('content')
        </main>

        <!--footer-->
        @include('partials.footer')

    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled-4.7.1.min.js"></script>
    <script type="text/javascript">(function runJS() {})();</script>
    <script src="{{ asset('js/responsive-nav.js')}}"></script>
    <script>
    $(document).ready(function(){
   $('ul.nav li.dropdown').hover(function() {
     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
   }, function() {
     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
   });
});
    </script>
    @yield('scripts')
</body>
</html>
