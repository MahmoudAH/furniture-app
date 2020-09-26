@extends('layouts.app')
@section('title')
الصفحه الرئيسيه
@endsection
@section('styles')
<link href="{{ asset('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link rel="{{ asset('stylesheet')}}" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<style>
 #accordionExample .card{
   margin-bottom: 5px;
 }
 #accordionExample .card-body {
   color:  #2ABB9B

 }

</style>
<script>
// MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
</script>

@endsection
@section('content')
  <!--begin crausal -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/family-room-382150_1920.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/toa-heftiba-644507-unsplash.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/neonbrand-381344-unsplash.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <div class="main">
  <div class="content_white">
    <h2>خدماتنا</h2>
    <p>نحن شركه المارد نقدم لكم الكثير من الخدمات...</p>
  </div>
  <div class="featured_content" id="feature">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-4 col-xs-3 feature_grid1" > <img src="images/ta.jpg" alt="تغليف">
          <h3 class="m_1"><a href="services.html">تغليف الاثاث</a></h3>
          <p class="m_2" class="text-justify">
          تتميز شركه المارد لنقل الأثاث عن غيرها في اشياء عده منها النقل حيث تتم عمليه النقل في أسرع وقت بدون اي ضرر اثناء النقل حيث لا نسيب للعميل اي مضيعه للوقت أو انشغاله عن عمله
 و أيضا منح العميل الثقه الكامله في الشركه.           </p>
          <a href="{{ route('service1') }}" class="feature_btn" style=""> المزيد </a> 
      </div>
        <div class="col-md-4 col-xs-3 feature_grid1"> <img src="images/istockphoto-1193079766-170667a.jpg" alt="تغليف">
          <h3 class="m_1"><a href="services.html"> فك وتركيب الاثاث </a></h3>
          <p class="m_2" class="text-justify">
          يوجد لدينا نحن شركه المارد لنقل الأثاث عمال نجاره متخصصين في عمليه الفك والتركيب الأثاث وذلك يتم بكل حرص وبكل مهاره ويتم التعامل مع الأثاث على حده.           </p>
          <a href="{{ route('service2') }}" class="feature_btn" style="margin-top:60px"> المزيد </a> </div>
<div class="col-md-3 col-xs-3 feature_grid1" style="border:none;margin-right:40px; "> <img src="images/a370462c0a427070b9b05789cc877cff.jpg" alt="تغليف">
          <h3 class="m_1"><a href="services.html"> نقل الاثاث </a></h3>
          <p class="m_2"   class="text-justify">
          تتميز شركه المارد لنقل الأثاث عن غيرها في اشياء عده منها النقل حيث تتم عمليه النقل في أسرع وقت بدون اي ضرر اثناء النقل حيث لا نسيب للعميل اي مضيعه للوقت أو انشغاله عن عمله
 و أيضا منح العميل الثقه الكامله في الشركه.           </p>
          <a href="{{ route('service3') }}" class="feature_btn" style="margin-top:15px;margin-bottom:10px"> المزيد </a> </div>
       
      </div>
    </div>
  </div>
  <div class="about-info">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="block-heading-two">
            <h2 ><span>من نحن</span></h2>
          </div>
          <p>
          أهلا ومرحبا بك عزيزي العميل في مكانك المميز شركه المارد لنقل وتغليف الأثاث والبضائع نحن من اوئل شركات نقل الأثاث في مصر لدينا خبره متقدمه في عالم نقل الأثاث المنزلي والفندقي و التجاري بكل عنايه وحرفه لعملائنا الكرام بستخدم أحدث الآليات في النقل لضمان أمان خدمه النقل في أقل وقت وأقل تكاليف وتوفير الوقت والمجهود. 

        .</p>
          <br>
          
          <a class="banner_btn" href="{{ route('about') }}">المزيد</a> </div>
        <div class="col-md-4" style="margin-bottom:10px">
          <div class="block-heading-two">
            <h3><span> مميزاتنا </span></h3>
          </div>
          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

        التنظيم والإهتمام
         <i class="fa fa-chevron-left" aria-hidden="true" style="padding:5px"></i>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      نسعي دائماً الي إرضاء العميل لأن هذه هي أهم نقطه لدينا وهي زياده الثقة في شركة المارد لكل نكون عند حسن ظنكم بنا فحن نعمل بتنظيم واهتمام حفاظاً على الأثاث لعدم حدوث اي مشاكل الثقة عنون لنا (شركة المارد) .
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

          نقل عفش فى اقل من ساعة <i class="fa fa-chevron-left" aria-hidden="true" style="padding:5px"></i>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      اهم مميزاتنا النقل السريع لعدم ضياع الوقت واستغلال كل دقيقه في عمليه النقل ف عمليه النقل هي أهم شيء وعندما تكون في وقت سريع يسهل على العميل اعاده ترتيب وفرش شقته في نفس اليوم دون الحاجه الي يوم آخر وهذا بسبب ميزت النقل السريع .
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        خبره في عالم النقل
        <i class="fa fa-chevron-left" aria-hidden="true" style="padding:5px"></i>

        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      شركة المارد لنقل الأثاث هي من أولى الشركات الرائده في عالم النقل نحن نمتلك خبره عشرون عاما مع متخصصون على أعلى مستوى في عمليه النقل، الفك والتركيب و التعبئة كل مهو يطلب ستجدونه معنا هنا في شركتكم شركة المارد .
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
  
<!--   <div class="highlight-info">
    <div class="overlay spacer">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
            <h4> سعاده العملاء 120+</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
            <h4> عمليات النقل التي قمنا بها 600+</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
            <h4> من نحن 25</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
            <h4> فروعنا 3 </h4>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="about-info">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="block-heading-two">
            <h1><span> صور من بعض عمليات نقل الاثاث ... </span></h1><br><br>
          </div>
        </div>
        <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

      <figure class="col-md-4">
        <a href="images/tt.jpg" data-size="1600x1067">
          <img alt="picture" src="images/ka.jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="images/mard.jpg" data-size="1600x1067">
        <img alt="picture" src="images/mard.jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="images/نقل.jpg" data-size="1600x1067">
          <img alt="picture" src="images/نقل.jpg" class="img-fluid">
        </a>
      </figure>
    </div>
    
  </div>

        </div>
      </div>
    </div>
  </div>


@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.flexslider.js')}}"></script>
@endsection
