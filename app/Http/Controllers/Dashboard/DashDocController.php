<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Medical;
use App\Models\Patient;
use App\Models\single_invoice;

class DashDocController extends Controller
{
    public function index()
    {
        $doctors=Doctor::all();
        $count=$doctors->count();
        $patients=Patient::all();
        $count_Pat=$patients->count();
        $invoices = single_invoice::all();
        $total = $invoices->sum('total_with_tax');
        $med=Medical::all();
        $tot_med=$med->count();
        $tot_pen=$invoices->count();

        return view('Dashboard.Doctor_Dashboard.dashboard' , compact(
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
}
