@extends('layouts.master')

@section('title', '| Create Permission')

@section('content')

<div class='col-md-6 col-md-offset-2' dir="rtl">

    {{-- @include ('errors.list') --}}
   
    <h1><i class='fa fa-key'></i> اضافه تصريح 
    
    </h1>
    <hr>
    
    <br>

   
   <form action="{{route('permissions.store')}}" method="POST">
      {{ csrf_field() }}
    <div class="form-group">
        <label for="name" >الاسم</label>
        <input type="text" class="form-control" name="name" id="name">

    </div>
    <br>

    @if(!$roles->isEmpty())

        <h4>اضافه دور لهذه الصلاحيه </h4>
        <div class="box" dir="rtl">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">الادوار :</h1>
                  @foreach ($roles as $role)
                      <div class="field">
                        <input type="checkbox" name="roles[]" value="{{$role->id}}">
                        {{$role->name}} 
                      </div>
                    @endforeach
                  </ul>
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->

    @endif
    
    <br>
    <button class="btn btn-primary" type="submit">اضافه</button>
    </form>
</div>

@endsection