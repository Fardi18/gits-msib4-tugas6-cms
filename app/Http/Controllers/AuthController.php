<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    // function untuk membuka halaman regist
    public function register(Request $request)
    {
        return view('register');
    }

    // function untuk membuka halaman login
    public function login(Request $request)
    {
        return view('login');
    }

    // function untuk regist
    public function doRegister(Request $request)
    {
        // validasi request (input)
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        // memasukkan request (input) ke dalam database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // me-loginkan admin wkwk
        Auth::login($user);

        // mengarahkan ke home setelah berhasil reqgist
        return redirect('/');
    }

    // function untuk login
    public function doLogin(Request $request)
    {
        // validasi request (inputan)
        $credentials = $request->validate([
            'email' => ['required', 'string', 'max:50', 'email'],
            'password' => ['required', Rules\Password::defaults()]
        ]);

        // validasi apakah data request (input) sesuai dengan database
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // error jika terdapat kesahalan data pada database dengan request atau inputan data
        return back()->withErrors([
            'email' => 'Email and Password are invalid'
        ])->onlyInput('email');
    }

    // function untuk logout
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
