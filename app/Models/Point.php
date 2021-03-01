<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    /**
     * arrays that are mass assignable when inserting/updating into the database
     * @var array
     */
    protected $fillable = ['post_id', 'total_point'];

    /**
     * one to one relation between post and point model
     * @return [object] [instance of post model]
     */
    public function posts() {
      return $this->belongsTo('App\Models\Post');
    }
}
