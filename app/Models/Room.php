<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'room_level_id',
        'status',
    ];

    public function level()
    {
        return $this->belongsTo(RoomLevel::class, 'room_level_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_id');
    }
}

