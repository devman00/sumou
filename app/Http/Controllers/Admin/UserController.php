<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::latest()->get();
        $users = User::with('roles')->get();
        // $users = User::whereRoleIs('administrator')->orWhereRoleIs('posts-manager')->get();
        // dd($users);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::latest()->get();
        return view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->all();
        
        if($file = $request->file('avatar'))
        {
            $destinationPath = ('storage/images/users');
            $imgP = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $imgP); 
            $data['avatar'] = $imgP;
        } else {
            $data['avatar'] = '';
        }

        $user = User::create($data);    
        $user->addRole($request->input('role'));

        return redirect()->route('admin.users.index')->with('success', 'User Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user->load('roles');
        $roles = Role::latest()->get();
        return view('admin.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        if(!empty($request->input('password'))) {
            $data = $request->all();
        } else {
            $data = $request->except(['password']);
        }

       if($file = $request->file('avatar'))
        {
            $destinationPath = ('storage/images/users');
            $imgP = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $imgP); 
            $data['avatar'] = $imgP;
        }  
        
        $user->update($data);
        $user->syncRoles([$request->input('role')]);

        return redirect()->route('admin.users.index')->with('success', 'User Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Deleted sussussfully');
    }
}
