<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * array that are mass assignable when inserting/updating into the location model
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * one to many relation between post and location model
     * @return [object] [instance of post model]
     */
    public function posts() {
      return $this->hasMany('App\Models\Post');
    }


}
