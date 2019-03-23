@extends('layouts.master')

@section('title', '| Edit User')

@section('content')

<div class='col-lg-6 col-lg-offset-2' dir="rtl">

    <h1><i class='fa fa-user-plus'></i> تعديل العضو {{$user->name}}</h1>
    <hr>
    {{-- @include ('errors.list') --}}

    <form action="{{route('users.update', $user->id)}}" method="POST">
          {{csrf_field()}}
      {{method_field('PUT')}}
    <div class="form-group">
        <label for="name" >الاسم</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
    </div>

    <div class="form-group">
        <label for="email" >الايميل:</label>
        <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
    </div>

    <h5><b>اعطاء دور</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            <input type="checkbox" name="roles[]" value="{{$role->id}}"  @if($user->roles->contains($role->id)) checked=checked @endif>
            {{$role->name}}<br>

        @endforeach
    </div>

    <div class="form-group">
        <label for="password">كلمه المرور </label>
        <input type="text" class="form-control" name="password" id="password"  placeholder="Manually give a password to this user" >

    </div>
      
    <button class="btn btn-primary" type="submit"> تحديث </button>
    </form>
</div>

@endsection