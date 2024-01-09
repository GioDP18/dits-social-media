<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function store(Request $request)
    {
       $data = $request -> validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email'=> 'required',
        'password'=> 'required',
        'gender'=> 'required',
        'birthdate' => 'required',
       ]);

       $newTodos = User::create($data);
        return redirect('/');
    }

    // login session
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($credentials)) {
            // Authentication successful
            return redirect('/home')->with('success', 'Login successful!');
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    // logout
    public function logout()
    {
        auth()->logout();

        return redirect('/login')->with('success', 'Logout successful!');
    }



}
