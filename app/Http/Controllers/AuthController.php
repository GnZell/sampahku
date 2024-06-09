<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('sampahku.dashboard');
                case 'user':
                    return redirect()->route('sampahku.dashboard');
                default:
                    return redirect()->route('login-page')->with('warning', 'Terjadi Kesalahan!');
            }
        } else {
            return redirect()->route('login-page')->withErrors(['Data yang dimasukkan tidak ditemukan']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-page')->with('success', 'Anda Berhasil logout');
    }
}
