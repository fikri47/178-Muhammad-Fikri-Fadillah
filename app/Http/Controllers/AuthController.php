<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('pages.login.login');
    }

    public function loginAccess(Request $request) {
        $data = [
            'email' => $request->email,
            'password'=> $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect('/admin');
        }

        return back()->with('error', 'Email atau Password Salah');
    }

    public function logout() {
        Auth::logout();

        return redirect('/');
    }
    
}
