<?php

namespace App\Http\Controllers;

use App\Models\FundBox;
use App\Models\FundPatientBox;
use App\Models\Patient;
use App\Models\Recipt;
use App\Models\Service;
use App\Models\single_invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReciptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invos = single_invoice::all();
        $services = Service::all();
        $recipts=Recipt::all();


        return view('Dashboard.Recipts.index',  compact('invos' , 'services' , 'recipts' ));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $invos = single_invoice::all();
        $services = Service::all();
        $recipts=Recipt::all();
        $Patients = Patient::all();

        return view('Dashboard.Recipts.create',  compact('invos' , 'services' , 'recipts' ,'Patients' ));

    }


    public function store(Request $request)
    {
        DB::beginTransaction();

        try{
            // store receipt_accounts
            $receipt_accounts = new Recipt();
            $receipt_accounts->date =date('y-m-d');
            $receipt_accounts->patient_id = $request->patient_id;
            $receipt_accounts->amount = $request->Debit;
            $receipt_accounts->description = $request->description;
            $receipt_accounts->save();


            // store fund_accounts
            $fund_accounts = new FundBox();
            $fund_accounts->date =date('y-m-d');
            $fund_accounts->recipt_id = $receipt_accounts->id;
            $fund_accounts->Debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->save();


            // store patient_accounts
            $patient_accounts = new FundPatientBox();
            $patient_accounts->date =date('y-m-d');
            $patient_accounts->patient_id = $request->patient_id;
            $patient_accounts->recipt_id = $receipt_accounts->id;
            $patient_accounts->Debit = 0.00;
            $patient_accounts->credit =$request->Debit;
            $patient_accounts->save();


            DB::commit();
            session()->flash('add');

            return redirect()->route('Recipts.create');
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipts = Recipt::findorfail($id);
        $Patients = Patient::all();
        return view('Dashboard.Recipts.print',  compact( 'recipts' ,'Patients' ));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $recipts = Recipt::findorfail($id);
        $Patients = Patient::all();
        return view('Dashboard.Recipts.edit',  compact( 'recipts' ,'Patients' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request)
    {
        DB::beginTransaction();

        try{
            // store receipt_accounts
            $receipt_accounts = Recipt::findorfail($request->id);
            $receipt_accounts->date =date('y-m-d');
            $receipt_accounts->patient_id = $request->patient_id;
            $receipt_accounts->amount = $request->Debit;
            $receipt_accounts->description = $request->description;
            $receipt_accounts->save();
            // store fund_accounts
            $fund_accounts = FundBox::where('recipt_id',$request->id)->first();
            $fund_accounts->date =date('y-m-d');
            $fund_accounts->receipt_id = $receipt_accounts->id;
            $fund_accounts->Debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->save();
            // store patient_accounts
            $patient_accounts = FundPatientBox::where('recipt_id',$request->id)->first();
            $patient_accounts->date =date('y-m-d');
            $patient_accounts->patient_id = $request->patient_id;
            $patient_accounts->receipt_id = $receipt_accounts->id;
            $patient_accounts->Debit = 0.00;
            $patient_accounts->credit =$request->Debit;
            $patient_accounts->save();


            DB::commit();
            session()->flash('edit');
            return redirect()->route('Recipts.index');
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(string $recipt)
    {
        $to_delete = Recipt::findorfail($recipt);
        $to_delete -> delete();
        return redirect() -> route('Recipts.index');

    }
}
