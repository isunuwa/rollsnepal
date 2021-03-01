<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * arrays that are mass assignable when inserting/updating into the database
     * @var array
     */
    protected $fillable = ['user_id', 'category_id', 'location_id', 'title', 'url', 'description'];

    /**
     * one to many relation between comment and post model
     * @return [object] [instance of comment model]
     */
    public function comments() {
      return $this->hasMany('App\Models\Comment');
    }

    /**
     * one to many relation between point and post model
     * @return [object] [instance of point model]
     */
    public function points() {
      return $this->hasOne('App\Models\Point');
    }

    /**
     * one to many relation between post and upvote model
     * @return [object] [instance of upvotes model]
     */
    public function upvotes() {
      return $this->hasMany('App\Models\Upvote');
    }

    /**
     * one to many relation between post and downvote model
     * @return [object] [instance of downvote model]
     */
    public function downvotes() {
      return $this->hasMany('App\Models\Downvote');
    }

    /**
     * one to many relation between post and category model
     * @return [object] [instance of category model]
     */
    public function category() {
      return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    /**
     * one to many relation between post and user model
     * @return [object] [instance of user model]
     */
    public function user() {
      return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    /**
     * one to many relation between location and post model
     * @return [object] [instance of location model]
     */
    public function locations() {
      return $this->belongsTo('App\Models\Location', 'location_id', 'id');
    }
}
