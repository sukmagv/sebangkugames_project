<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('layouts.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            // 'name' => 'required|max:255',
            // 'no' => 'required|max:255',
            // 'email' => 'required|email|unique:users',
            // 'password' => 'required|min:4',
            'name' => ['required', 'max:255'],
            'no' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required','min:4'],
        ]);

        User::create([
            'name' => $request->name,
            'no' => $request->no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success');
    }

    public function showLoginForm()
    {
        return view('layouts.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            //check
            if($user->is_admin) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/home');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/home');
    }
}
