<?php

namespace App\Http\Controllers\General;

use Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   * get the landing page
   * @return View [description]
   */
  public function getIndex() {

    // $rightnav_users = User::take(5)->get();

    $posts = Post::orderBy('created_at', 'desc')->get();
    $users =  User::all();
    $categories = Category::all();
    $locations = Location::all();
    return view('frontend.general.main_home', compact('posts','users','categories','locations'));
  }

  /**
   * get request to displaythe login page
   * @return View [description]
   */
  public function getLogin() {
    return view('frontend.general.login');
  }

   
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function singlePost($title)
  {
    $post = Post::with('category', 'locations')
                ->where('title', $title)
                ->first();
    $categories = Category::all();
    $locations = Location::all();
    return view('frontend.posts.single_post', compact('post','categories','locations'));
  }

   
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function postByLocation($location)
  {
    // dd($location);
    $posts = Post::where('location_id', $location)->get();
    $users =  User::all();
    $categories = Category::all();
    $locations = Location::all();

    return view('frontend.general.main_home', compact('posts','users','categories','locations'));
  }


}
