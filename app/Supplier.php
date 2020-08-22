<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $hidden = [
        'company_name', 
        'contact_person', 
        'email',
        'address',
        'location',
        'company_phone',
        'contact_phone',
        'image',
    ];
    public function product()
    {
        return $this->hasMany('App/Product');
    }
}
