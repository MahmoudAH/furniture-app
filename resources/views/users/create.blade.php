@extends('layouts.master')

@section('title', '| Add User')
@section('styles')
<style type="text/css">
    .label{
        color:black;
    }
</style>
@endsection
@section('content')

<div class='col-md-6 col-md-offset-2' dir="rtl">

    <h1><i class='fa fa-user-plus'></i> اضافه عضو جديد</h1>
    <hr>

    {{-- @include ('errors.list') --}}
    <form action="{{route('users.store')}}" method="POST">
      {{csrf_field()}}
    <div class="form-group">
        <label for="name" >الاسم</label>
        <input type="text" class="form-control" name="name" id="name">

    </div>

    <div class="form-group">
        <label for="email" >الايميل:</label>
        <input type="text" class="form-control" name="email" id="email">

    </div>

    <h5><b>اعطاء دور</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            <input type="checkbox" name="roles[]" value="{{$role->id}}" >
            {{$role->name}}<br>

        @endforeach
    </div>
    <div class="form-group">

          <label for="password" >كلمه المرور </label>
          <input type="text" class="form-control" name="password" id="password"  placeholder="Manually give a password to this user" >

    </div>

    <div class="form-group">

        <label for="password confirm" >تاكيد كلمه المرور</label>
        <input type="text" class="form-control" name="password_confirmation" id="password"  placeholder="Manually give a password to this user" >

    </div>

    
   <button class="btn btn-primary" type="submit">اضافه</button>
  </form>

</div>

@endsection
