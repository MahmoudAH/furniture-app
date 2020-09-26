@extends('layouts.app')
@section('title')
تغليف الاثاث
@endsection
@section('styles')
<link href="{{ asset('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link rel="{{ asset('stylesheet')}}" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
@endsection
@section('content')
    <div class="container" style="padding-bottom: 30px;border-bottom: 2px solid #d9d9f3">
      <div class="row">
        <div class="col-md-6 " style="margin-top: 100px">
          <div class="block-heading-two">
            <h2><span> تغليف الاثاث ...</span></h2>
          </div>
          <p>
          يوجد لدينا نحن شركه الخليج العربي لنقل الأثاث عمليه تغليف الأثاث وذلك لغرض الحفاظ على الأثاث من الخدش ويوجد عده طرق لدينا للتغليف كما يريد ويطلب العميل

        .</p>
          <br>
          <p>يقوم العميل بالتصال وادخال البيانات

       الشركة ترسل مندوب ليتفقد الاثاث والمنقولات ويحدد عدد السيارات والعمال التنى يحتاجها.
       
     </p>
    </div>
      <div class="col-md-4 col-md-offset-1" style="margin-top: 70px">
        <div>
           <img class="img-responsive" src="/images/taa.jpg"/>
        </div>
      </div>
    </div>
</div>

@endsection
@section('scripts')

@endsection
