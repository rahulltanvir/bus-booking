<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'distance',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}