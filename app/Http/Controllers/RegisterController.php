<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\ValidatedData;
use PHPUnit\TextUI\Configuration\Php;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registration', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $Validate = $request->validate([
            'name' => 'required|max:255|alpha',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $Validate['password'] = Hash::make($Validate['password']);

        User::create($Validate);

        return redirect('/login')->with('success', 'Registration was successful !');
    }
} 

