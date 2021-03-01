<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * arrays that are mass assignable when inserting/updating into category model
     * @var arrays
     */
    protected $fillable = ['category_genre', 'remarks'];

    /**
     * one to many relation between post and category model
     * @return object instance of post model
     */
    public function posts() {
      return $this->hasMany('App\Models\Post');
    }

    /**
     * one to many relation between category and sub category model
     * @return object instance of sub category model
     */
    public function subCategories() {
        return $this->hasMany('App\Models\Sub_category');
    }



}
