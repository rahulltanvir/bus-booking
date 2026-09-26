<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'seat_number',
        'seat_type',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function tripSeats()
    {
        return $this->hasMany(TripSeat::class);
    }
}