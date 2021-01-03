<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryFormField extends Model
{
    // // public function category()
    // // {
    // //     return $this->belongsTo('App\Model\Category');
    // // }

    public function formField()
    {
        return $this->belongsTo('App\Models\FormField');
    }
}
