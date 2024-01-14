<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceCont extends Controller
{

    public function index()
    {
        $insurances = Insurance::all();

        return view('Dashboard.insurance.index',  compact('insurances'));
    }


    public function create()
    {
        $insurances = Insurance::all();
         return view('Dashboard.insurance.create',  compact('insurances'));
    }


    public function store(Request $request)
    {
        try {

            $insurances = new insurance();
            $insurances->insurance_code = $request->insurance_code;
            $insurances->discount_percentage = $request->discount_percentage;
            $insurances->Company_rate = $request->Company_rate;
            $insurances->status = 1;
            $insurances->name = $request->name;
            $insurances->notes = $request->notes;
            $insurances->save();
            session()->flash('add');
            return redirect()->route('Insurances.create');
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(string $id)
    {
        //
    }


    public function edit($insurance)
    {
        return view('Dashboard.insurance.edit', [
            'insurance' => Insurance::
            find($insurance)
        ]);
    }

    public function status(Request $request, $id)
    {
        $insurances = Insurance::findOrFail($id);

        $insurances->status = $request->input('status');

        $insurances->save();

        return redirect()->route('insurances.index');
    }


    public function update(Request $request)
    {
        try {

            $insurances = new insurance();
            $insurances->insurance_code = $request->insurance_code;
            $insurances->discount_percentage = $request->discount_percentage;
            $insurances->Company_rate = $request->Company_rate;
            $insurances->status = $request->status;
            $insurances->name = $request->name;
            $insurances->notes = $request->notes;
            $insurances->deleteOldRecord();
            $insurances->save();
            session()->flash('add');
            return redirect()->route('Insurances.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function destroy($insurance)
    {
        $to_delete = Insurance::findorfail($insurance);
        $to_delete -> delete();
        return redirect() -> route('Insurances.index');
    }

}
