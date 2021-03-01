<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
  /**
   * arrays that are mass assignable when inserting/updating the user model
   * @var arrays
   */
    protected $fillable = ['username', 'password', 'email', 'first_name', 'middle_name', 'last_name'];

    /**
     * one to many relation between users and comments model
     * @return object instance of comment model
     */
    public function comments() {
      return $this->hasMany('App\Models\Comment');
    }

    /**
     * one to many relation between sub_comments and user model
     * @return [object] [instance of user model]
     */
    public function subComments() {
      return $this->hasMany('App\Models\Sub_comment');
    }

    /**
     * one to many relation between users and posts model
     * @return object instance of post model
     */
    public function posts() {
      return $this->hasMany('App\Models\Post');
    }

    /**
     * one to many relation between users and upvotes model
     * @return object instance of upvotes model
     */
    public function upvotes() {
      return $this->hasMany('App\Models\Upvote');
    }

    /**
     * one to many relation between users and downvote model
     * @return object instance of downvote model
     */
    public function downvotes() {
      return $this->hasMany('App\Models\Downvote');
    }
}
