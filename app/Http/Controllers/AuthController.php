<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login_bootstrap');
    }

    public function admin()
    {
        return view('dashboard_bootstrap');
    }

    public function user()
    {
        return view('homepage_bootstrap');
    }

    public function test(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email'
        ]);


        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil disimpan'
        ]);
    }

    public function form()
    {
        return view('auth.test');
    }



    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'user' // Set default role
        ]);

        return redirect('/login')->with('success', 'Registration successful!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();


            if ($user->role === 'admin') {
                return redirect()->intended('dashboard/admin');
            } else {
                return redirect()->intended('dashboard/user');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
