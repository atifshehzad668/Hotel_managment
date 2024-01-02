<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with(['hotel', 'roomType'])->get();

        // Your further logic here...

        return view('rooms.index', compact('rooms'));
    }
    public function create()
    {
        $hotels = Hotel::all();
        $roomtypes = RoomType::all();
        return view('rooms.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        $room = new Room;
        $room->RoomNumber = $request->room_number;
        $room->hotel_id = $request->hotel_id;
        $room->roomtype_id = $request->roomtype_id;
        $room->Status = $request->status;
        $room->save();
        return redirect()->route('room.index');
    }
    public function edit(Request $request, $id)
    {
        $selected_room = Room::with(['hotel', 'roomType'])->find($id);

        $roomTypes = RoomType::all();
        $hotels = Hotel::all();

        return view('rooms.edit', get_defined_vars());
    }
    public function update(Request $request, $id)
    {
        $update_room = Room::find($id);
        $update_room->RoomNumber = $request->room_number;
        $update_room->hotel_id = $request->hotel_id;
        $update_room->roomtype_id = $request->roomtype_id;
        $update_room->Status = $request->status;
        $update_room->save();
        return redirect()->route('room.index');
    }

    public function destroy($id)
    {
        $room_delete = Room::find($id);
        $room_delete->delete();
        return redirect()->route('hotel.index')->with('success', 'hotel deleted successfully');
    }
}
