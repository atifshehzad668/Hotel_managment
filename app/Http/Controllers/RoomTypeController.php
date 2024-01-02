<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomtypes = RoomType::all();
        return view('room_type.index', compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roomtype = new RoomType();
        $roomtype->name = $request->name;
        $roomtype->description = $request->description;
        $roomtype->pricepernight = $request->price_per_night;
        $roomtype->capacity = $request->capacity;

        $roomtype->save();
        return redirect()->route('roomtype.index')->with('success', 'hotel added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $roomtype = RoomType::find($id);
        return view('room_type.edit', compact('roomtype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $roomtype = RoomType::find($id);
        $roomtype->name = $request->name;
        $roomtype->description = $request->description;
        $roomtype->pricepernight = $request->price_per_night;
        $roomtype->capacity = $request->capacity;

        $roomtype->save();
        return redirect()->route('roomtype.index')->with('success', 'hotel added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roomtype_delete = RoomType::find($id);
        $roomtype_delete->delete();
        return redirect()->route('hotel.index')->with('success', 'hotel deleted successfully');
    }
}
