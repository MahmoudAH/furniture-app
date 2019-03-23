@extends('layouts.master')

@section('title', '| Roles')

@section('content')
@if(Session::has('message'))
    <div class=" col-md-4 col-md-offset-4 alert alert-success" style="text-align: center;margin-top: 10px"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
@endif
<div class="col-lg-10 col-lg-offset-1" dir="rtl">
    <h1><i class="fa fa-key"></i> الادوار

    <a href="{{ route('users.index') }}" class="btn btn-default pull-left">الاعضاء</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-left">الصلاحيات</a></h1>
    <hr>
    <div class="table-responsive" dir="rtl">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>الادوار</th>
                    <th>الصلاحيات</th>
                    <th>الاحداث</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{  $role->permissions()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    @can('edit user')
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-right" style="">Edit</a>
                    @endcan
                     @can('delete user')
                    <form method="POST" action="{{route('roles.destroy', $role->id)}}">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                    <button  class="btn btn-danger" type="submit" style="margin-right: 5px;">
                      Delete
                    </button>
                    </form>
                    @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    @role('admin|creator')
    <a href="{{ URL::to('roles/create') }}" class="btn btn-success">اضافه دور</a>
    @endrole
    
   <div class="alert alert-info" role="alert" style="margin-top: 50px">
     <p class="text-center" style="font-size: 25px;color: black"><i class="fa fa-info" aria-hidden="true" style="color: red;padding: 5px;background-color: #fff;border-radius: 50%"></i>
    انت لديك هذه الصلاحيات فقط  .. </p>
   </div>
</div>

@endsection
