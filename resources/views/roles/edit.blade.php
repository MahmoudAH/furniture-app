@extends('layouts.master')

@section('title', '| Edit Role')

@section('content')

<div class='col-lg-6 col-lg-offset-2' dir="rtl">
    <h1><i class='fa fa-key'></i> تعديل دور : {{$role->name}}</h1>
    <hr>
    {{-- @include ('errors.list')
 --}}
    <form action="{{route('roles.update', $role->id)}}" method="POST">
      {{ method_field('PUT') }}
            {{ csrf_field() }}

    <div class="form-group">
        <label for="name" >الاسم</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$role->name}}">
    </div>

    <h5><b> اعطاء تصريحات: </b></h5>
    
    <div class="box" dir="rtl">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">التصريحات :</h1>
                  @foreach ($permissions as $permission)
                      <div class="field">
                        <input type="checkbox" name="permissions[]" value="{{$permission->id}}" @if($role->permissions->contains($permission->id)) checked=checked @endif>
                        {{$permission->name}} 
                      </div>
                    @endforeach
                  </ul>
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->
    <button class="btn btn-primary" type="submit">تعديل البيانات </button>
    </form>    
</div>

@endsection