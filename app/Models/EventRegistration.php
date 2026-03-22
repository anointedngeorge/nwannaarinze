<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    public $fillable = [
        "email",
        "first_name",
        "last_name",
        "middle_name",
        "occupation",
        "state_of_resident",
        "submit_expectation",
        "phone",
        "civic_interest",
        'event'
    ];
}
