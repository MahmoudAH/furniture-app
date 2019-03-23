@extends('layouts.master')

@section('title', '| Edit Permission')

@section('content')

<div class='col-md-6 col-md-offset-2' dir="rtl">

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> تعديل التصريح: {{$permission->name}}</h1>
    <br>
    <form action="{{route('permissions.update', $permission->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field('PUT')}}

    <div class="form-group">
        <label for="name" >الاسم</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}">

    </div>
    <br>
    
    <button class="btn btn-primary" type="submit">اضافه</button>
    </form>
</div>

@endsection