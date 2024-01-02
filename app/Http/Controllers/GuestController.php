<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::all();
        return view('guest.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $guests = new Guest;

        $guests->first_name = $request->fname;
        $guests->last_name = $request->lname;
        $guests->date_of_birth = $request->dob;
        $guests->address = $request->address;
        $guests->phone = $request->phone;
        $guests->email  = $request->email;
        $guests->save();
        return redirect()->route('guest.index')->with('succes', 'guest add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $guest = Guest::find($id);
        return view('guest.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $guests = Guest::find($id);

        $guests->first_name = $request->fname;
        $guests->last_name = $request->lname;
        $guests->date_of_birth = $request->dob;
        $guests->address = $request->address;
        $guests->phone = $request->phone;
        $guests->email  = $request->email;
        $guests->save();
        return redirect()->route('guest.index')->with('succes', 'guest update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $guest_delete = Guest::find($id);
        $guest_delete->delete();
        return redirect()->route('guest.index')->with('success', 'guest delete succesfully');
    }
}
