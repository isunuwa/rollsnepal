<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Downvote extends Model
{
  /**
   * arrays that are mass assignable when inserting/updating the downvote model
   * @var array
   */
    protected $fillable = ['post_id', 'user_id', 'datetime'];

    /**
     * one to many relation between user and downvote model
     * @return objects instance of users model
     */
    public function user() {
      return $this->belongsTo('App\Models\User');
    }

    /**
     * one to many relation between user and post model
     * @return object instance of post model
     */
    public function post() {
      return $this->belongsTo('App\Models\Post');
    }
}
