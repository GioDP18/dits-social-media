<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function visitProfile($id){

        $user = User::find($id);
        $posts = User::find($id)->posts;
        return view('components/pages/visitPage/visitProfile', ['user'=>$user, 'posts'=>$posts]);
    }
}
