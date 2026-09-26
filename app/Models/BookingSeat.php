<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingSeat extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'trip_seat_id',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function tripSeat()
    {
        return $this->belongsTo(TripSeat::class);
    }
}