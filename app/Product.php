<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    protected $fillable=
    [
        'code',
        'product_image',
        'product_name',
        'description',
        'purchase_date',
        'purchase_price',
        'retail_price',
        'profit_margin',
        'quantity',
        'category_id',
        'supplier_id'
        
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
