<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['username' => $request->input('username'), 'password' => $request->input('password')])->first();

        if ($user == null) {
            return redirect('login')->with(['error' => 'Username atau Password Salah']);
        }

        session(['is_login' => true, 'id' => $user->id, 'username' => $user->username, 'email' => $user->email]);

        return redirect()->route('jurnal.list');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if ($user) {
            return redirect(route('home'));
        }

        return redirect(route('register'));
    }

    function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
