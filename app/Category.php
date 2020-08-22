<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name','description',
    ];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
