<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = 'name';

    protected $fillable = [
        'name'
    ];


    /**
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * @return HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
