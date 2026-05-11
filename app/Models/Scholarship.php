<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'google_form_link',
        'status',
    ];
    
}
