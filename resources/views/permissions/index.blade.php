@extends('layouts.master')

@section('title', '| Permissions')
@section('content')
@if(Session::has('message'))
    <div class=" col-md-4 col-md-offset-4 alert alert-success" style="text-align: center;margin-top: 10px"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
@endif
<div class="col-md-10 col-md-offset-1" dir="rtl">
    <h1><i class="fa fa-key"></i>التصريحات

    <a href="{{ route('users.index') }}" class="btn btn-default pull-left">الاعضاء</a>
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-left">الادوار</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>التصريحات</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                    @can('edit user')    
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-right" style="margin-left: 3px;">Edit</a>
                    @endcan
                    @role('admin')
                    <form method="POST" action="{{route('permissions.destroy', $permission->id)}}">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                    <button  class="btn btn-danger" type="submit" style="margin-right: 5px;">
                      Delete
                    </button>
                    </form>
                    @endrole
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @role('admin|creator')
    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">اضافه تصريح</a>
   @endrole
   
   <div class="alert alert-info" role="alert" style="margin-top: 50px">
     <p class="text-center" style="font-size: 25px;color: black"><i class="fa fa-info" aria-hidden="true" style="color: red;padding: 5px;background-color: #fff;border-radius: 50%"></i>
    انت لديك هذه الصلاحيات فقط  .. </p>
   </div>
</div>

@endsection
