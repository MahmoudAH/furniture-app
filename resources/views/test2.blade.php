@extends('layouts.app')
@section('title')
الصفحه الرئيسيه
@endsection
@section('styles')

<link href="{{ asset('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link rel="{{ asset('stylesheet')}}" href="css/font-awesome.min.css">
  <script src="{{ asset('js/jquery.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
@endsection
@section('content')

  <div class="banner text-center" style="padding-top:0;margin-top:0">
    <div class="container">
      <div class="banner-info" style="margin-top:0">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus,<br>
          sem quas potenti malesuada vel phasellus.</p>
        <a class="banner_btn" href="about.html">Read More</a> </div>
    </div>
  </div>
  <div class="main">
  <div class="content_white">
    <h2>Featured Services</h2>
    <p>Quisque cursus metus vitae pharetra auctor, sem massa mattis semat interdum magna.</p>
  </div>
  <div class="featured_content" id="feature">
    <div class="container">
      <div class="row text-center">
        <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-cog fa-3x"></i>
          <h3 class="m_1"><a href="services.html">Legimus graecis</a></h3>
          <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
          <a href="services.html" class="feature_btn">More</a> </div>
        <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-comments-o fa-3x"></i>
          <h3 class="m_1"><a href="services.html">Mazim minimum</a></h3>
          <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
          <a href="services.html" class="feature_btn">More</a> </div>
        <div class="col-md-3 col-xs-3 feature_grid1"> <i class="fa fa-globe fa-3x"></i>
          <h3 class="m_1"><a href="services.html">Modus altera</a></h3>
          <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
          <a href="services.html" class="feature_btn">More</a> </div>
        <div class="col-md-3 col-xs-3 feature_grid2"> <i class="fa fa-history fa-3x"></i>
          <h3 class="m_1"><a href="services.html">Melius eligendi</a></h3>
          <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
          <a href="services.html" class="feature_btn">More</a> </div>
      </div>
    </div>
  </div>
  <div class="about-info">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="block-heading-two">
            <h2><span>About Our Company</span></h2>
          </div>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
          <br>
          <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          <a class="banner_btn" href="about.html">Read More</a> </div>
        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Our Advantages</span></h3>
          </div>
          <div class="panel-group" id="accordion-alt3">
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor</a> </h4>
              </div>
              <div id="collapseOne-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </h4>
              </div>
              <div id="collapseTwo-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor </a> </h4>
              </div>
              <div id="collapseThree-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </a> </h4>
              </div>
              <div id="collapseFour-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="highlight-info">
    <div class="overlay spacer">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
            <h4>120+ Happy Clients</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
            <h4>600+ Projects Completed</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
            <h4>25 Awards Won</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
            <h4>3 Offices</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-area">
    <div class="testimonial-solid">
      <div class="container">
        <h2>Client Testimonials</h2>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
              <p><strong>- John Doe -</strong></p>
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
              <p><strong>- Jane Doe -</strong></p>
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
              <p><strong>- John Smith -</strong></p>
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
              <p><strong>- Linda Smith -</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_bottom">
      <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
      <div class="copy">
        <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
      </div>
    </div>
  </div>


@endsection
@section('scripts')
<script src="{{ asset('js/responsive-nav.js')}}"></script>
<script src="{{ asset('js/jquery.flexslider.js')}}"></script>
@endsection
