<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public $fillable = [
        "image",
        "tag",
        "title",
        "content",
        "can_show"
    ];

}
