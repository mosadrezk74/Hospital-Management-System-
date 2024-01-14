<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use App\Models\single_invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicalController extends Controller
{
    public function store( Request $request)
    {
        DB::beginTransaction();

        try {

            $this->invoice_status($request->invoice_id,3);
            $diagnosis = new Medical();
            $diagnosis->date = date('Y-m-d');
            $diagnosis->diagnosis = $request->diagnosis;
            $diagnosis->medicine = $request->medicine;
            $diagnosis->invoice_id = $request->invoice_id;
            $diagnosis->patient_id = $request->patient_id;
            $diagnosis->doctor_id = $request->doctor_id;
            $diagnosis->save();

            DB::commit();
            session()->flash('add');
            return redirect()->back();
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $patient_records = Medical::where('patient_id',$id)->get();
        return view('Dashboard.Doctors.invoices.patient_record',compact('patient_records'));
    }

    public function addReview(Request $request)
    {
        DB::beginTransaction();
        try {

            $this->invoice_status($request->invoice_id,2);
            $diagnosis = new Medical();
            $diagnosis->date = date('Y-m-d');
            $diagnosis->review_date = date('Y-m-d H:i:s');
            $diagnosis->diagnosis = $request->diagnosis;
            $diagnosis->medicine = $request->medicine;
            $diagnosis->invoice_id = $request->invoice_id;
            $diagnosis->patient_id = $request->patient_id;
            $diagnosis->doctor_id = $request->doctor_id;
            $diagnosis->save();

            DB::commit();
            session()->flash('add');
            return redirect()->back();
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function invoice_status($invoice_id,$id_status){
        $invoice_status = single_invoice::findorFail($invoice_id);
        $invoice_status->update([
            'invoice_status'=>$id_status
        ]);
    }

}
