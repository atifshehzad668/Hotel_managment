<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function create()
    {
        return view('hotel.create');
    }

    public function store(Request $request)
    {
        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->phone = $request->phone;
        $hotel->email = $request->email;
        $hotel->stars = $request->stars;
        $hotel->checkin_time = $request->check_in;
        $hotel->checkout_time = $request->check_out;
        $hotel->save();
        return redirect()->route('hotel.index')->with('success', 'hotel added successfully');
    }
    public function index(Request $request)
    {
        $hotels = Hotel::all();
        return view('hotel.index', compact('hotels'));
    }
    public function edit(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->phone = $request->phone;
        $hotel->email = $request->email;
        $hotel->stars = $request->stars;
        $hotel->checkin_time = $request->check_in;
        $hotel->checkout_time = $request->check_out;
        $hotel->save();
        return redirect()->route('hotel.index');
    }
    public function destroy($id)
    {
        $hotel_delete = Hotel::find($id);
        $hotel_delete->delete();
        return redirect()->route('hotel.index')->with('success', 'hotel deleted successfully');
    }
}