<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $users = User::where('username', $request->username)
            ->where('password', md5($request->password))
            ->where('is_active', 1);

        if($users->count() == 1)
        {
            foreach($users->get() as $user)
            {
                session()->put('name', $user->name);
                session()->put('role', $user->role_id);
                session()->put('is_login', 1);
            }
            return redirect()->route('home');
                
            }
        else
        return redirect('login')->with('error', 'Username / password Anda salah.');
        
        // $password = md5($request->password);
        // return $password;
    }

    public function register(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'password' => md5($request->password),
        ]);
        return redirect('login')->with('success', 'Akun berhasil didaftarkan, silahkan login.');
    }

    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}
