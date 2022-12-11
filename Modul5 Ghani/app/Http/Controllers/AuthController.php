<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function daftar() {
        return view('daftar');
    }

    public function store(Request $request) {
        $request->validate(['konfirmasi_password' => 'same:password']);
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password)
        ]);
        session()->flash('blue-notification', 'Register berhasil');
        return redirect('/login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('yellow-notification', 'Login Berhasil');
        }

        return back()->with('red-notification', 'Gagal Login');
    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withoutCookie('navbar');
    }
}
