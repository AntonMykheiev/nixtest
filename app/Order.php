<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function products()
    {
        return $this->belongsTo('App\Product');
    }

}
