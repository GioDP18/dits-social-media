<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use App\Models\User;

use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    // public function visitProfile($id){

    //     $user = User::find($id);
    //     $posts = User::find($id)->posts;
    //     return view('components/pages/visitPage/visitProfile', ['user'=>$user, 'posts'=>$posts]);
    // }

    public function getPosts(){
        $posts = Posts::with(['users', 'comments', 'likes'])->withCount('comments', 'likes')->orderBy('created_at', 'DESC')->get();
        $checkIfLiked = Likes::where('users_id', Auth::user()->id)->get();
        // dd($checkIfLiked);
        return view('components/pages/homePage/homepage', ['posts' => $posts, 'checkIfLiked' => $checkIfLiked]);
    }


    public function uploadPost(Request $request){
        // Validate the form data, including the image field
        $request->validate([
            'caption' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle the file upload
        // $filename = $request->file('image')->store('posts_images', 'public');


        // Create a new post with the form data and the image path
        Posts::create([
            'users_id' => $request->input('users_id'),
            'caption' => $request->input('caption'),
            'image' => $request->file('image')->store('posts_images', 'public'),
            'created_at' => Carbon::now('GMT+8')
        ]);

        return redirect('/home');

    }
}
