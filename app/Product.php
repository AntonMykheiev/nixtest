<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = 'name';

    public $fillable = [
        'name', 'category_name', 'price'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
