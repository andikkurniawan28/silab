<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Station;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $stations = Station::all();
        $users = User::join('roles', 'users.role_id', 'roles.id')
            ->select('users.*', 'roles.name as role_name')
            ->get();
        return view('user.index', compact('users', 'roles', 'stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = User::where('username', $request->username)
            ->where('name', $request->name)
            ->count();
            
        if($check > 0)
        {
            return redirect()->back()->with('error', 'Error : Username & nama tersebut sudah terdaftar.');
        }
        else
        {
            User::create($request->all());
            return redirect()->back()->with('success', 'Sukses: User berhasil disimpan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('id', $id)
            ->join('roles', 'users.role_id', 'roles.id')
            ->select('users.*', 'roles.name as role_name')
            ->get();
        return view('user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => md5($request->password),
            'role_id' => $request->role_id,
            'is_active' => $request->is_active,
        ]);
        return redirect()->back()->with('success', 'Sukses: User berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Sukses: User berhasil dihapus.');
    }
}
