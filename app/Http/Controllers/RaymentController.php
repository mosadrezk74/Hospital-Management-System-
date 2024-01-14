<?php

namespace App\Http\Controllers;

use App\Models\FundBox;
use App\Models\FundPatientBox;
use App\Models\Patient;
use App\Models\PaymentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments =  PaymentAccount::all();
        return view('Dashboard.Payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Patients=Patient::all();

        return view('Dashboard.Payments.create' , compact('Patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            // store receipt_accounts
            $payment_accounts = new PaymentAccount();
            $payment_accounts->date =date('y-m-d');
            $payment_accounts->patient_id = $request->patient_id;
            $payment_accounts->amount = $request->credit;
            $payment_accounts->description = $request->description;
            $payment_accounts->save();

            // store fund_accounts
            $fund_accounts = new FundBox();
            $fund_accounts->date =date('y-m-d');
            $fund_accounts->Payment_id = $payment_accounts->id;
            $fund_accounts->credit = $request->credit;
            $fund_accounts->Debit = 0.00;
            $fund_accounts->save();

            // store patient_accounts
            $patient_accounts = new FundPatientBox();
            $patient_accounts->date =date('y-m-d');
            $patient_accounts->patient_id = $request->patient_id;
            $patient_accounts->Payment_id = $payment_accounts->id;
            $patient_accounts->Debit = $request->credit;
            $patient_accounts->credit = 0.00;
            $patient_accounts->save();

            DB::commit();
            session()->flash('add');
            return redirect()->route('Payment.create');

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
        $payment_account = PaymentAccount::findorfail($id);
        return view('Dashboard.Payments.print',compact('payment_account'));
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
    public function destroy(string $payment)
    {
        $to_delete = PaymentAccount::findorfail($payment);
        $to_delete -> delete();
        return redirect() -> route('Payments.index');

    }
}
