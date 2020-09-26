<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*
        if(!auth()->user()->hasRole('admin|creator|editor'))
        {
          return back()->with('message','Access Denied For That Action');
        }*/
        
        $users = User::all();

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->hasRole('admin|creator'))
        {
        return back()->with('message','Access Denied For That Action');
        }
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->hasRole('admin|creator'))
        {
        return back()->with('message','Access Denied For That Action');
        }

        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $password = trim($request->password);
        $user->password = Hash::make($password);
        $user->save();
        $roles = $request['roles'];

        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();
            $user->assignRole($role_r);
            }
        }

        return redirect()->route('users.index')
            ->with('message',
             'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!auth()->user()->hasRole('admin|editor'))
        {
        return back()->with('message','Access Denied For That Action');
        }

        $user = User::findOrFail($id);
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!auth()->user()->hasRole('admin|editor'))
        {
        return back()->with('message','Access Denied For That Action');
        }

        $user = User::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'email|unique:users,email,'.$id,
            
        ]);

        //$input = $request->only(['name', 'email', 'password']);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $password = $request->password;
        if (isset($password)){
             $user->password = Hash::make($password);
        }
        $roles = $request['roles'];
        $user->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        }
        else {
            $user->roles()->detach();
        }
        return redirect()->route('users.index')
            ->with('message',
             'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->hasRole('admin'))
        {
        return back()->with('message','Access Denied For That Action');
        }
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('message',
             'User successfully deleted.');
    }
}
