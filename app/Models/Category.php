<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function formField(){
        return $this->belongsToMany('App\Models\FormField', 'category_form_fields', 'category_id', 'form_field_id');
    }

}
