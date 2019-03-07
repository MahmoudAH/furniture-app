@extends('layouts.app')
@section('title')
اتصل بنا 
@endsection
@section('styles')
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
            <h3><i class="fa fa-envelope"></i> ارسل لنا طلبك: </h3>
          </div>

          <p> <i class="fa fa-crosshairs" aria-hidden="true"></i>
سوف يتم الرد في اقل من 24 ساعه </p>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-name" class="pull-right"> الاسم</label>
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
          <a class="btn-floating blue accent-1"><i class="fa fa-map-marker"></i></a>
          <p style="padding-top:10px">مصر الجديده , CA 94126</p>
          <p>ميدان الجيش</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-phone" aria-hidden="true"></i>
</a>
          <p style="padding-top:10px">+ 01 234 567 89</p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1" style="margin-bottom:6px"><i class="fa fa-envelope"></i></a>
          <p style="padding-top:10px">info@gmail.com</p>
          <p>sale@gmail.com</p>
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
