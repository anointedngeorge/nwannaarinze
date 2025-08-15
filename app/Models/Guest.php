<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable =  [
        "firstname",
        "lastname",
        "address",
        "phone",
        "email"
    ];


    public function fullname() {
        return $this->firstname . " " . $this->lastname;
    }

}
