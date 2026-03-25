<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    public $fillable =  [
            'title',
            'sub_title',
            'btn_title',
            'btn_url',
            'image',
            'can_show'
        ];
}
