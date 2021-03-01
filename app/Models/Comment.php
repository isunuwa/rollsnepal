<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  /**
   * arrays that are mass assignable when inserting/updating into comment model
   * @var [type]
   */
    protected $fillable = ['user_id', 'post_id', 'comment'];

    /**
     * one to many relation between user and coment model
     * @return object instance of user model
     */
    public function user() {
      return $this->belongsTo('App\Models\User');
    }

    /**
     * one to many relation between comment and post model
     * @return object instance of post model
     */
    public function posts() {
      return $this->belongsTo('App\Models\Post');
    }

    /**
     * one to many relation between comment and sub comment model
     * @return object instance of sub comment model
     */
    public function subComments() {
      return $this->hasMany('App\Models\Sub_comment');
    }
}
