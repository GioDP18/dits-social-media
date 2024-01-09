<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function updateProfile($id){
        $profile = User::find($id);
        return view('/components/pages/profilePage/profilePage', compact('profile'));
    }
    public function submitupdateProfile(Request $request, $id){
        $profile=User::find($id);
        $profile->first_name=$request->first_name;
        $profile->last_name=$request->last_name;
        $profile->gender=$request->gender;
        $profile->birthdate=$request->birthdate;
        $profile->email=$request->email;
        $profile->password=$request->password;
        $profile->save();
        return redirect('/');
    }
}
