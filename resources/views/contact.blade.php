@extends('layouts.app')
@section('title')
اتصل بنا 
@endsection
@section('styles')
<link href="{{ asset('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<link rel="{{ asset('stylesheet')}}" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<style>
.md-form {
    position: relative;
    margin-bottom: 1.5rem;
}
</style>
@endsection

@section('content')
<div class="container">
<!--Section: Contact v.1-->
<section class="section pb-5">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        
            <h4>{!! \Session::get('success') !!}</h4>
       
    </div>
@endif
  <!--Section heading-->
  <h2 class="section-heading h1 pt-4"></h2>
  <!--Section description-->
  <p class="section-description pb-4" style="margin-bottom:20px"><i class="fa fa-phone" aria-hidden="true" style="padding-left:15px;font-size:30px"></i>
 لا تتردد في الاتصال بنا سنكون في انتظار رسالتك .</p>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">
     
        <div class="card-body">
        
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3 ><i class="fa fa-envelope"></i> ارسل لنا طلبك: </h3>
          </div>

          <p> <i class="fa fa-crosshairs" aria-hidden="true"></i>
سوف يتم الرد في اقل من 24 ساعه </p>
          <br>

          <!--Body-->

         <!-- <form method="POST" action="{{ url('contact') }}">
          @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">الاسم</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name" require>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">الايميل</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="email" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">العنوان</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="address">
  </div>
  <div class="md-form">

            <label for="form-text"> الموضوع</label>
            <textarea type="text" id="form-text" class="form-control md-textarea" rows="3" name="message"></textarea>

          </div>

  
  <input  type="submit" class=" btn btn-primary"> ارسال </input>
</form>-->


          <form method="POST" action="{{ url('contact') }}">
                  @csrf
    
          <div class="md-form">
            <label for="form-name" class="pull-right"> </label>
            <input type="text" id="form-name" class="form-control" name="name" placeholder="الاسم" >

          </div>

          <div class="md-form">
            <label for="form-email"></label>
            <input type="text" id="form-email" class="form-control" name="email"  placeholder="الايميل">

          </div>

          <div class="md-form">
            <label for="form-Subject">  </label>
            <input type="text" id="form-Subject" class="form-control" name="address"  placeholder="العنوان">

          </div>

          <div class="md-form">

            <label for="form-text"> </label>
            <textarea type="text" id="form-text" class="form-control md-textarea" rows="3" name="message"  placeholder="الموضوع"></textarea>

          </div>

          <div class="text-center mt-4">
            <button  type="submit" class=" btn btn-primary"> ارسال </button>
          </div>
          </form>

        </div>
      </div>

      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px;" >
        
          <iframe style="height:100%;width:100%;border:0;" frameborder="0" 
          src="https://www.google.com/maps/embed/v1/place?q=القاهره&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
      </div>
      
      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-map-marker"></i></a>
          <p style="padding-top:10px">مصر الجديده , مدينه نصر</p>
          <p>ميدان الجيش</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-phone" aria-hidden="true"></i>
</a>
          <p style="padding-top:10px"><a href="tel: 01097060751" ><span style="direction:ltr"> 01097060751 </span></a></p>
          <p><a href="tel: 01202750832" ><span style="direction:ltr"> 01202750832 </span></a></p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1" style="margin-bottom:6px"><i class="fa fa-envelope"></i></a>
          <p style="padding-top:10px">khaledahmed24680@gmail.com</p>
          <p>khahmed8642@yahoo. com</p>
        </div>
      </div>
    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.1-->

</div>
@endsection
@section('scripts')

@endsection
