<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showSignupForm() {
        return view('auth.signup');
    }

    public function signup(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:pembeli',
            'email' => 'required|email|max:255|unique:pembeli',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Pembeli::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Sign up berhasil! Silakan login.');
    }
}
