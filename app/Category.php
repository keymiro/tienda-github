<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug','description','color',
    ];

    public function products (){

        return $this->hasMany('App\Product');
    }
}
