<?php

namespace App\Http\Controllers\Post;

use Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use App\Models\Upvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostPostRequest;

class PostController extends Controller
{
  /**
   * function to handle get request of create post page
   * @return View
   */
  public function getCreatePost() {

    $categories = Category::all();
    $locations = Location::all();
    // dd($categories);
    return view('frontend.posts.create_post', compact('categories', 'locations'));
  }

  /**
   * [postpost description]
   * @param  PostPostRequest $request [description]
   * @return [type]                    [description]
   */
  public function postCreatePost(PostPostRequest $request) {

    // if ($request->hasFile('image')) {
    $image = $request->image;
    $featured_new_name = time(). $image->getClientOriginalName();
    $image->move('public/uploads/posts', $featured_new_name);

    // $url = 'public/uploads/posts/'.$featured_new_name;
    
    $posts = Post::create([
      'user_id' => Auth::id(),
      'title'  => $request->post_title,
      'category_id'  => $request->post_category,
      'location_id'  => $request->post_location,
      'url'  => 'public/uploads/posts/'.$featured_new_name,
      'description'  => $request->post_description
    ]);

    $request->session()->flash('success', 'New post created successfully');
    return redirect()->intended('/');
  }

  /**
   * function to handle get request of update function
   *
   * @param  int  $id
   * @return
   */
  public function getUpdatePost($id)
  {
    $post = Post::find($id);
    $categories = Category::all();
    $locations = Location::all();
    return view('frontend.posts.edit_post', compact('post', 'categories','locations'));
  }

  /**
   * [postpost description]
   * @param  PostPostRequest $request [description]
   * @return [type]                    [description]
   */
  public function postUpdatePost(PostPostRequest $request, $id)
  {
    $post = Post::find($id);
    if ($request->hasFile('image')) {
      $image = $request->image;
      $featured_new_name = time().$image->getClientOriginalName();
      $image->move('public/uploads/posts', $featured_new_name);

      $post->url = 'public/uploads/posts/'. $featured_new_name;
    }

    $post->title = $request->post_title;
    $post->category_id = $request->post_category;
    $post->location_id = $request->post_location;
    $post->description = $request->post_description;
    $post->save();

    return redirect()->intended('user/home');
  }

  /**
   * Deleting the specified resource.
   *
   * @param  int  $id
   * @return
   */
  public function deletePost($id)
  {
    $post = Post::find($id);
    $post->delete();
    return redirect()->intended('user/home');
  }

  public function postLikePost(Request $request)
  {
      $post_id = $request['postID'];
      $is_like = $request['isLike'] === 'true';
      $update = false;

      $post = Post::find($post_id);
      if(!$post){
        return null;
      }
      $user = Auth::user();
      $like = $user->upvotes()->where('post_id', $post_id)->first();
      // $dislike = $user->downvotes()->where('post_id', $post_id)->first();
      
      if($like->count() == 0){
        $already_liked = Upvote::create([
          'user_id' => $user,
          'post_id'  => $post
        ]);

        // 
        // $update = true;

        // if($already_liked == $is_like){
        //   $like->delete();
        //   return null;
        // }
      }
      else{
        $like = New Upvote();
      }

      $like->post_id = $is_like;
      $like->user_id = $user->id;
      if($update){
        $like->update();
      }
      else{
        $like->save();
      }
      return null;

  }

}
