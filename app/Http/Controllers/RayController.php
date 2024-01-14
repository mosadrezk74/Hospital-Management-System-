<?php

namespace App\Http\Controllers;

use App\Models\Rays;
use Illuminate\Http\Request;

class RayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {



            $rays=new Rays();

                $rays->description=$request->description;
                $rays->invoice_id=$request->invoice_id;
                $rays->patient_id=$request->patient_id;
                $rays->doctor_id=$request->doctor_id;

                $rays->save();




            session()->flash('add');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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
    public function destroy($rays)
    {
        $to_delete = Rays::findorfail($rays);
        $to_delete ->delete();
        return redirect() ->
        route('invoices.index');
    }
}
