<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
        ]);

        $newTodos = User::create($data);
        return redirect('/');
    }

    // login session
    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication successful
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'Login successful!');
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function profileTimeline($id)
    {
        $profile = User::find($id);
        return view('/components/pages/profilePage/profileTimeline', compact('profile'));
    }
    
    public function getPosts(){
        $posts = Posts::with(['users', 'comments'])->withCount('comments')->get();
        // dd($posts);
        return view('/components/pages/profilePage/profileTimeline', ['posts' => $posts]);
    }

    public function updateProfile($id)
    {
        $profile = User::find($id);
        return view('/components/pages/profilePage/profilePage', compact('profile'));
    }
    public function submitupdateProfile(Request $request, $id)
    {
        $profile = User::find($id);
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->gender = $request->gender;
        $profile->birthdate = $request->birthdate;
        $profile->email = $request->email;
        // $profile->password = $request->password;
        $profile->save();
        return redirect('/profile-timeline/' . $profile->id);
    }

    // logout
    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Logout successful!');
    }



}

