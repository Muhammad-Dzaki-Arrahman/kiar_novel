<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function show_login()
    {
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'Required|email:dns',
            'password' => 'required|',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Unsucceful Login, Please check your email & password !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
