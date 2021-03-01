<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    /**
     * [$fillable description]
     * @var array
     */
    protected $fillable = ['category_id', 'name', 'remarks'];

    /**
     * one to many relation between category and sub_category model
     * @return [object] [instance of category model]
     */
    public function categories() {
      return $this->belongsTo('App\Models\Category');
    }
}
