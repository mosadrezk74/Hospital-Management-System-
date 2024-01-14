<?php

namespace App\Http\Controllers;

use App\Models\RayMan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Pest\Support\Arr;

class RayManController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ray_employees = RayMan::all();
        return view('Dashboard.ray_employee.index',compact('ray_employees'));

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

            $ray_employee = new RayMan();

            $ray_employee->name = $request->name;
            $ray_employee->email = $request->email;
            $ray_employee->password = Hash::make($request->password);

            $ray_employee->save();
            session()->flash('add');
            return back();

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
        $input = $request->all();

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = Arr::except($input, ['password']);
        }

        $ray_employee = RayMan::find($id);
        $ray_employee->update($input);

        session()->flash('edit');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            RayMan::destroy($id);
            session()->flash('delete');
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
