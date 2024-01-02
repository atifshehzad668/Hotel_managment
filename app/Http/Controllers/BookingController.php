<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with(['guest', 'rooms'])->get();
        return view('booking.index', compact('bookings'));
    }
    public function index2()
    {
        $guests = Guest::with(['bookings'])->get();
        return view('booking.index2', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guests = Guest::all();
        $rooms = Room::all();
        return view('booking.create', get_defined_vars());
    }



    /**
     * Store a newly created resource in storage.
     */



    // if (request()->has('rooms') && count(request()->rooms)) {
    //     foreach (request()->rooms as $key => $value) {
    //         $res = Room::whereId($value)->first();
    //         echo $res->roomType->pricepernight . "br";
    //     }
    // }
    // $res = Room::whereId(1)->first();
    // dd($res->roomType->pricepernight);

    public function store(Request $request)
    {
        if ($request->has('rooms') && count($request->rooms) > 0) {
            foreach ($request->rooms as $roomId) {
                $room = Room::whereId($roomId)->first();

                if ($room) {
                    $totalprice = $room->roomType->pricepernight;

                    $booking = new Booking;
                    $booking->guest_id = $request->guest;
                    $booking->room_id = $roomId;
                    $booking->checkin_date = $request->check_in;

                    $booking->total_price = $totalprice;
                    $booking->save();
                    return redirect()->route('booking.index');
                }
            }
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }


    public function edit(Request $request, $id)
    {
        $booking = Booking::with('guest', 'rooms')->find($id);
        $allRooms = Room::all();

        $previouslySelectedGuest = $booking->guest->id;
        $previouslySelectedRooms = $booking->rooms->pluck('id')->toArray();

        return view('booking.edit', compact('booking', 'previouslySelectedGuest', 'previouslySelectedRooms', 'allRooms'));
    }




    public function update(Request $request, $id)
    {
        $update_booking = Booking::find($id);

        if ($update_booking) {

            if ($request->has('room')) {
                $roomId = $request->room;
                $room = Room::find($roomId);

                if ($room) {
                    $totalPrice = $room->roomType->pricepernight;

                    $update_booking->guest_id = $request->guest;
                    $update_booking->room_id = $roomId;
                    $update_booking->checkin_date = $request->check_in;
                    $update_booking->total_price = $totalPrice;
                    $update_booking->save();

                    return redirect()->route('booking.index')->with('success', 'Booking updated successfully');
                }
            }

            return redirect()->back()->with('error', 'Error updating booking. Please select a valid room.');
        }


        return redirect()->route('booking.index')->with('error', 'Booking not found.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
