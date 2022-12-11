<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index() {
        $pilihan_warna = [
            'primary' => 'Blue',
            'success' => 'Green',
            'warning' => 'Yellow',
            'info'    => 'Cyan',
        ];
        $get_navbar = Cookie::get('navbar');
        $navbar = Cookie::get('navbar') ? Cookie::get('navbar') : 'primary';

        return view('profile', [
            'pilihan_warna' => $pilihan_warna,
            'get_navbar' => $get_navbar,
            'navbar' => $navbar
        ]);
    }

    public function update(Request $request, User $user) {
        if($request->password === null || $request->konfirmasi_password === null) {
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp
            ]);
        } else {
            $request->validate([
                'konfirmasi_password' => 'same:password'
            ]);
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password)
            ]);
        }

        Cookie::queue('navbar', $request->navbar);

        return redirect('/profile')->with('notif_kuning', 'Data berhasil diupdate');
    }
}
