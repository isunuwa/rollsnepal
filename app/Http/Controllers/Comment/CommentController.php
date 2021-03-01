<?php

namespace App\Http\Controllers\Comment;

use Auth;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function postStoreComment(Request $request, Post $post)
    {
        // dd($request);
        Comment::create([
            'comment' => $request->comment_body,
            'post_id' => $post->id,
            'user_id' => Auth::id()
        ]);

        return back();
    }

    
}
