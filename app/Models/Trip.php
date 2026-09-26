<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'route_id',
        'travel_date',
        'departure_time',
        'arrival_time',
        'fare',
        'status',
    ];

    protected $casts = [
        'travel_date' => 'date',
        'fare' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function tripSeats()
    {
        return $this->hasMany(TripSeat::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}