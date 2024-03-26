<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if ($user->isAdmin()){
                return redirect()->route('admin.dashboard');
            } elseif ($user->isPetugas()){
                return redirect()->route('petugas.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        } else {
            return redirect()->route('login')->withErrors(['error' => 'Username atau password salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
