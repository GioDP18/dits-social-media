<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Symfony\Polyfill\Intl\Idn\Idn;

class CommentsController extends Controller
{

    public function retrieveComments($id){
        $comments = Posts::orderBy('created_at', 'DESC')->find($id)->comments;
        $post = Posts::find($id);
        $user = Posts::find($id)->users;
        
        return view('components/pages/homepage/comment', ['comments' => $comments, 'post' => $post,  'user' => $user,]);
    }

    public function sendComment(Request $request){
        
        $id = $request->input('posts_id');
        
        if($request->has('image')){
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            Comments::create([
                'comment' => $request['comment'],
                'image' => $request->file('image')->store('comment_images', 'public'),
                'posts_id' => $request['posts_id'],
                'users_id' => $request['user_id'],
            
            ]);
        }
        else {
            Comments::create([
                'comment' => $request['comment'],
                'image' => " ",
                'posts_id' => $request['posts_id'],
                'users_id' => $request['user_id'],
            
            ]);
        }
        
        
        return redirect('comments/'. $id);
    }
}
