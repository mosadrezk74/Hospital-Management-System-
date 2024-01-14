<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\single_invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{



    // قائمة الكشوفات تحت الاجراء
    public function index()
    {
        $invoices = single_invoice::where('doctor_id',  Auth::user()->id)->where('invoice_status',1)->get();
        $doctor=Doctor::all();

        return view('Dashboard.Doctors.invoices.index',compact('invoices' , 'doctor' ));
    }

    // قائمة المراجعات
    public function reviewInvoices()
    {
        $invoices = single_invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 2)->get();
        return view('Dashboard.Doctors.invoices.review_invoices', compact('invoices'));
    }

    // قائمة الفواتير المكتملة
    public function completedInvoices()

    {
        $invoices = single_invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 3)->get();
        return view('Dashboard.Doctors.invoices.completed_invoices', compact('invoices'));
    }

    public function destroy(string $invoice)
    {
        $to_delete = single_invoice::findorfail($invoice);

        $to_delete->delete();

        return redirect()->route('invoices.index');
    }

}
