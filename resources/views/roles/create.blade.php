@extends('layouts.master')

@section('title', '| Add Role')

@section('content')

<div class='col-md-6 col-md-offset-2' dir="rtl">

    <h1><i class='fa fa-key'></i> اضافه دور </h1>
    <hr>
    {{-- @include ('errors.list') --}}

   <form action="{{route('roles.store')}}" method="POST">
      {{ csrf_field() }}
    <div class="form-group">
        
        <label for="name" >الاسم</label>
        <input type="text" class="form-control" name="name" id="name">

    </div>

    <h5><b>اعطاء تصريحات </b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            <input type="checkbox" name="permissions[]" value="{{$permission->id}}">
             {{$permission->name}} 
            <br>

        @endforeach
    </div>

    
   <button class="btn btn-primary" type="submit">اضافه</button>
   </form>

</div>

@endsection