<?php

namespace App\Http\Controllers\User;
use \Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getIndex() {
        $user = Auth::user();

        // full name of a user
        $user_full_name = ucwords($user->first_name." ".$user->middle_name." ".$user->last_name);
        $posts = Post::all();
        $locations = Post::all();
        $categories = Post::all();

        return view('frontend.users.user_home', compact('user','user_full_name','posts','locations','categories'));
    }

    public function getProfile($username)
    {
        $user = User::where('username', $username)->first();
        $posts = Post::where("user_id", $user->id)->get();

        $locations = Post::all();
        $categories = Post::all();
        $user_full_name = ucwords($user->first_name." ".$user->middle_name." ".$user->last_name);

        return view('frontend.users.user_home', compact('user','user_full_name', 'posts', 'locations', 'categories'));
    }
}
