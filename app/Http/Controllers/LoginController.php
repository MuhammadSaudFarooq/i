<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:08|confirmed',
        ]);
        
        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return redirect('login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        $email = $request['email'];
        $password = $request['password'];
        $credentials = $request->only('email', 'password');
        if(auth()->attempt($credentials)) {
            return redirect('dashboard');
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
