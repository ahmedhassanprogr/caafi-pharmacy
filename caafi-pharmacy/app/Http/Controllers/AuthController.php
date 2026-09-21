<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  // library for authentication



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.show-login-form');


    }


    public function showRegisterForm()
    {
        return view('auth.show-register-form');
    }

    public function register(Request $request)
    {
    
      $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        $user = User::create($validated);
        Auth::login($user);
        return redirect()->route('medicines.index');


           
       
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
           
            return redirect()->route('medicines.index');
        }

       
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);


    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.showLoginForm');
    }
    
}



