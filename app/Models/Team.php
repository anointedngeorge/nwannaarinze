<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    public $fillable = [
            'name',
            'designation',
            'image',
            'description',
            'can_show'
        ];
}
