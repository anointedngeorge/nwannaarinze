<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        "guest",
        "room",
        "checkin",
        "checkout",
        "total_price",
        "attended_by",
        "code",
        "status",
        "name"
    ];


    public function guestid() {
        return $this->belongsTo(Guest::class, 'guest', 'id');
    }

    public function roomid() {
        return $this->belongsTo(Room::class, 'room', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'attended_by', 'id');
    }


}
