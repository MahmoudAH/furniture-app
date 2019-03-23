@extends('layouts.app')

@section('title', '| Roles')

@section('content')
<div class="container" dir="rtl">
    <div class="row" style="margin-top: 20px;padding: 10px">
        <div class="col-md-6 col-md-offset-1">
            <div dir="rtl">
            <img src="images/404-liquid-error-vector-16717017.jpg" >
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3" style="padding: 15px">
            <div class="alert alert-danger text-center" role="alert" >
              <span class="text-center" style="font-style: 25px;margin-right: 150px">!!!!ليس لديك الصلاحيات  لعمل هذا  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
              </span>
            </div>
          </div>  
        </div>
    </div>
</div>
@endsection
