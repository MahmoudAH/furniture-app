<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="direction:rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>المارد
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
    <link href="{{ asset('css/font-style.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/footer-font.css')}}" rel="stylesheet" />
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
    .nav-link{
      padding:15px;
      margin-right:15px;
      font-weight:bold
    }
    
    </style>

    @yield('styles')
</head>
<body style="text-align:right;direction: rtl;">
    <div id="app">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
  
  <a class="navbar-brand" href="{{ url('home') }}" >{{ config('app.name', 'Laravel') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav nav-pills  pull-right" >
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
          
        </div>
      </li>

      <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">من نحن </a>
      </li>
                      
       <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">اتصل بنا </a>
          </li>
      
    </ul>
  </div>
</nav>

        <main>
            @yield('content')
        </main>

        <!--footer-->
        @include('partials.footer')

    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
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
