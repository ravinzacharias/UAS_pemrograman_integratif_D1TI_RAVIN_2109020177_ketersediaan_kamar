<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function checkIn(Request $request, $roomId)
    {
        $room = Room::findOrFail($roomId);
        if ($room->status != 'available') {
            return response()->json(['message' => 'Room is not available'], 400);
        }

        $reservation = Reservation::create([
            'patient_id' => $request->patient_id,
            'room_id' => $roomId,
            'check_in_date' => now(),
        ]);

        $room->update(['status' => 'occupied']);

        return response()->json($reservation);
    }

    public function checkOut($reservationId)
    {
        $reservation = Reservation::findOrFail($reservationId);
        $reservation->update(['check_out_date' => now()]);

        $room = Room::findOrFail($reservation->room_id);
        $room->update(['status' => 'available']);

        return response()->json($reservation);
    }
}

