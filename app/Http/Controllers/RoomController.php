<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function availableRooms()
    {
        $rooms = Room::where('status', 'available')
            ->with('level')
            ->orderBy('room_level_id')
            ->orderBy('room_number')
            ->get();

        return response()->json($rooms);
    }
}

