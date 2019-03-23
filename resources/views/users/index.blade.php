@extends('layouts.master')

@section('title', '| Users')

@section('content')
@if(Session::has('message'))
    <div class=" col-md-4 col-md-offset-4 alert alert-success" style="text-align: center;margin-top: 10px"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
@endif
<div class="col-lg-10 col-lg-offset-1" dir="rtl">
    <h1><i class="fa fa-users"></i> الاعضاء المسجلين: <a href="{{ route('roles.index') }}" class="btn btn-default pull-left">الادوار</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-left">الصلاحيات</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>الايميل</th>
                    <th>تاريخ تسجيل العضو</th>
                    <th> صلاحيات العضو</th>
                    <th> صلاحيات العضو </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                    <td>
                    @can('edit user')
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-right">Edit</a>
                    @endcan
                    @can('delete user')
                    <form method="POST" action="{{route('users.destroy', $user->id)}}">
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
    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
    @endrole
    
   <div class="alert alert-info" role="alert" style="margin-top: 50px">
     <p class="text-center" style="font-size: 25px;color: black"><i class="fa fa-info" aria-hidden="true" style="color: red;padding: 5px;background-color: #fff;border-radius: 50%"></i>
    انت لديك هذه الصلاحيات فقط  .. </p>
   </div>
</div>

@endsection
