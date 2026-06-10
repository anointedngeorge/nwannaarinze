<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MEvents extends Model
{

    public $fillable = [
        'title',
        'content',
        'start',
        'end',
        'address',
        'date',
        'image',
        'time',
        'google_form_link',
        'description',
        'can_register'
    ];


    public function registrations()
    {
        return $this->hasMany(EventRegistration::class, "event");
    }

    public function getTotalRegistration()
    {
        return $this->registrations()->count();
    }
}
