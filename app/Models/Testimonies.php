<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonies extends Model
{
    public $fillable = [
        'tag',
        'name',
        'content',
        'image'
    ];
}
