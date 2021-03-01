<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_comment extends Model
{
    /**
     * arrays that are mass assignable when inserting/updating the sub_comment model
     * @var array
     */
    protected $fillable = ['comment_id', 'user_id', 'comment'];

    /**
     * one to many relation between comment and sub_comment model
     * @return [object] [instance of comment model]
     */
    public function comments() {
      return $this->belongsTo('App\Models\Comment');
    }

    /**
     * one to many relation between user and sub_comment model
     * @return [object] [instance of user model]
     */
    public function users() {
      return $this->belongsTo('App\Models\User');
    }
}
