<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Pembeli;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user di tabel pembeli
        $user = Pembeli::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan session
            Session::put('username', $user->username);
            Session::put('user_id', $user->id);

            // Redirect ke dashboard (tanpa memeriksa penjual/pembeli)
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['login' => 'Username atau password salah.']);
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
