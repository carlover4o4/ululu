<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number',
        'type',
        'description',
        'capacity',
        'price_per_night',
        'status',
        'image',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
