<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Medical;
use App\Models\Rays;
use Illuminate\Http\Request;

class PatientDetialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id){

        $patient_records = Medical::where('patient_id',$id)->get();
        $patient_rays = Rays::where('patient_id',$id)->get();
        $patient_Laboratories=Lab::where('patient_id' , $id )->get();
        return view('Dashboard.Doctors.invoices.patient_details',compact('patient_records','patient_rays' , 'patient_Laboratories' ));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
