<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    
    protected $fillable = [
        "hotel",
        "type",
        "name",
        "images",
        "featured_image",
        "description",
        "capacity",
        "status"
    ];


}
