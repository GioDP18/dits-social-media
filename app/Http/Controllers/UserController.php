<?php

namespace App\Http\Controllers;

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
}
