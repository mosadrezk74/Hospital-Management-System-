<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ambulances=Ambulance::all();
        return view('Dashboard.Ambulances.index' , compact('ambulances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ambulances=Ambulance::all();
        return view('Dashboard.Ambulances.create' , compact('ambulances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ambulances = new Ambulance();
        $ambulances->car_number = $request->car_number;
        $ambulances->car_model = $request->car_model;
        $ambulances->car_year_made = $request->car_year_made;
        $ambulances->car_type = $request->car_type;
        $ambulances->driver_name = $request->driver_name;
        $ambulances->driver_license_number = $request->driver_license_number;
        $ambulances->driver_phone = $request->driver_phone;
        $ambulances->notes = $request->notes;
        $ambulances->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
