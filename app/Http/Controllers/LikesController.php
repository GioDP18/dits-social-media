<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function like(Request $request){
        $checkIfLiked = Likes::where(function ($query) use ($request) {
            $query->where('users_id', $request->input('users_id'))
                ->where('posts_id', $request->input('posts_id'));
        })->get();

        if ($checkIfLiked->isEmpty()) {
            Likes::create([
                'users_id' => $request->input('users_id'),
                'posts_id' => $request->input('posts_id')
            ]);
            return response()->json(['like' => true]);
        } else {
            Likes::where('users_id', $request->input('users_id'))->where('posts_id', $request->input('posts_id'))->delete();
            return response()->json(['like' => false]);
        }
    }
}
