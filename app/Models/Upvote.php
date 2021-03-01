<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
  /**
   * arrays that are mass assignable when inserting/updating the upvote model
   * @var array
   */
    protected $fillable = ['post_id', 'user_id', 'datetime'];

    /**
     * one to many relation between upvote and user model
     * @return object instance of user model
     */
    public function user() {
      return $this->belongsTo('App\Models\User');
    }

    /**
     * one to many relation between posts and upvote model
     * @return object instance of post model
     */
    public function post() {
      return $this->belongsTo('App\Models\Post');
    }
}
