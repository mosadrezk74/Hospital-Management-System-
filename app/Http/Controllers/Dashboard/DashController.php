<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\myevent;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Medical;
use App\Models\Patient;
use App\Models\single_invoice;
use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function event(){
        event(new myevent('hello world'));


    }
    public function index()
    {

        event(new myevent('hello world'));

        $doctors=Doctor::all();
        $count=$doctors->count();
        $patients=Patient::all();
        $count_Pat=$patients->count();
        $invoices = single_invoice::all();
        $total = $invoices->sum('total_with_tax');
        $med=Medical::all();
        $tot_med=$med->count();
        $tot_pen=$invoices->count();

        return view('Dashboard.Admin.dashboard' , compact(
            'doctors'
            ,  'count'
            ,  'patients'
            ,  'count_Pat'
            ,  'total'
            ,  'invoices'
            ,  'tot_med'
            ,  'tot_pen'





        ) )  ;
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
