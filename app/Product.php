<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function productsByCategory(Category $category)
    {

    }
}
