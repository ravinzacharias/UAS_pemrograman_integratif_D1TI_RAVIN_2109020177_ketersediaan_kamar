<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('rooms/available', [RoomController::class, 'availableRooms']);
Route::post('reservations/checkin/{roomId}', [ReservationController::class, 'checkIn']);
Route::post('reservations/checkout/{reservationId}', [ReservationController::class, 'checkOut']);
