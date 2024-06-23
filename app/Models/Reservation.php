<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'room_id',
        'reservation_date',
        'check_in_date',
        'check_out_date',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}

