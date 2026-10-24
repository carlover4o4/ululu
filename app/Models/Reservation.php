<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'booking_code',
        'customer_id',
        'room_id',
        'check_in',
        'check_out',
        'guests',
        'nights',
        'price_per_night',
        'total_price',
        'status',
        'expires_at',
        'cancelled_at',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'check_in' => 'date',
            'check_out' => 'date',
            'expires_at' => 'dateTime',
            'cancelled_at' => 'dateTime',
        ];
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
