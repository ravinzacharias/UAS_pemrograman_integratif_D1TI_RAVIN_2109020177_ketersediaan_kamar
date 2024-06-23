<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'address',
        'phone_number',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'patient_id');
    }
}

