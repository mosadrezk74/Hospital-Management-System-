<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Models\Sections\Section;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{

    public function index()
    {
        $booking = Booking::all();
        $sections = Section::all();
        $doctors = Doctor::all();


        return view('Dashboard.Booking.index',  compact('booking'  , 'sections'  , 'doctors' ));

    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {

        $bookings = new Booking();
        $bookings->name = $request->name;
//        $bookings->section_id = $request->section_id;
        $bookings->doctor_id = $request->doctor_id;
        $bookings->phone = $request->phone;
        $bookings->appointment = $request->appointment;

        $bookings->save();
        session()->flash('add');


        return redirect()->route('Bookings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $booking = Booking::all();
        $sections = Section::all();
        $doctors = Doctor::all();


        return view('Dashboard.Booking.show ',  compact('booking'  , 'sections'  , 'doctors' ));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $book)
    {
        $to_delete = Booking::findorfail($book);
        $to_delete -> delete();
        return redirect() -> route('Bookings.show');
    }
}
