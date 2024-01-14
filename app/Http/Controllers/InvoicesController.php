<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Section;
use App\Models\Service;
use App\Models\single_invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public $InvoiceSaved,$InvoiceUpdated;
    public $show_table = true;
    public $tax_rate = 17;
    public $updateMode = false;
    public $price,$discount_value = 0 ,$patient_id,$doctor_id,$section_id,$type,$Service_id,$single_invoice_id;
    public $subtotal;

    public function index()
    {
        $Invoices = single_invoice::all();
        $doctors = Doctor::all();
        $services=Service::all();
        $sections = Section::all();
        $patients = Patient::all();
        return view('Dashboard.Invoices.index', compact('Invoices','doctors' , 'sections' , 'services','patients' ));
    }


    public function create()
    {
        $Invoices = single_invoice::all();
        $doctors = Doctor::all();
        $services=Service::all();
        $sections = Section::all();
        $patients = Patient::all();


        return view('Dashboard.Invoices.create', compact('Invoices','doctors' , 'sections' , 'services', 'patients' ));
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
