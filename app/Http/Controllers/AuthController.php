<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(LoginRequest $request)
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

    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('login');
    }
}
