<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TripSeat extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'seat_id',
        'status',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

    public function bookingSeat()
    {
        return $this->hasOne(BookingSeat::class);
    }
}