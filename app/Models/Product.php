<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function subCategory(){
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function productValue(){
        return $this->hasMany('App\Models\ProductValue');
    }

    public function formField(){
        return $this->belongsTo('App\Models\FormField');
    }
}
