<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\FundPatientBox;
use App\Models\Image;
use App\Models\Patient;
use App\Models\Recipt;
use App\Models\single_invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients=Patient::all();
        return view('Dashboard.Patients.index' , compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients=Patient::all();
        return view('Dashboard.Patients.create' , compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'Address' => 'required',
                'email' => ['required'],
                'Date_Birth' => ['required'],
                'Phone' => 'required|numeric|digits:11',
                'Gender' => ['required'],
                'Blood_Group' => ['required'],
            ]
        );
        try {
            $Patients = new Patient();
            $Patients->name = $request->name;
            $Patients->Address = $request->Address;
            $Patients->email = $request->email;
            $Patients->Password = Hash::make($request->Phone);
            $Patients->Date_Birth = $request->Date_Birth;
            $Patients->Phone = $request->Phone;
            $Patients->Gender = $request->Gender;
            $Patients->Blood_Group = $request->Blood_Group;

            $Patients->save();

            DB::commit();

            session()->flash('add');

            return redirect()->route('Patients.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(string $id)
    {

        $Patient = Patient::findorfail($id);
        $invoices = single_invoice::where('patient_id', $id)->get();
        $receipt_accounts = Recipt::where('patient_id', $id)->get();
        $Patient_accounts = FundPatientBox::orWhereNotNull('single_invoice_id')
            ->orWhereNotNull('recipt_id')
            ->orWhereNotNull('Payment_id')
            ->where('patient_id', $id)
            ->get();
        return view('Dashboard.Patients.show', compact('Patient', 'invoices', 'receipt_accounts', 'Patient_accounts'));
    }


    public function edit(string $id)
    {
        $patient = Patient::findorfail($id);
        return view('Dashboard.Patients.edit',compact('patient'));
    }


    public function update(Request $request, string $id)
    {
        $Patients = new Patient();
        $Patients->name = $request->name;
        $Patients->Address = $request->Address;
        $Patients->email = $request->email;
        $Patients->Password = Hash::make($request->Phone);
        $Patients->Date_Birth = $request->Date_Birth;
        $Patients->Phone = $request->Phone;
        $Patients->Gender = $request->Gender;
        $Patients->Blood_Group = $request->Blood_Group;
        $Patients->deleteOldRecord();
        $Patients->save();
        session()->flash('edit');
        return redirect()->route('Patients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($patient)
    {
        $to_delete = Patient::findorfail($patient);
        $to_delete -> delete();
        return redirect() -> route('Patients.index');
    }

    public function verifyAndStoreImagepat(Request $request, $inputname , $foldername , $disk, $imageable_id, $imageable_type) {

        if( $request->hasFile( $inputname ) ) {

            // Check img
            if (!$request->file($inputname)->isValid()) {
                $this->flash('Invalid Image!')->error()->important();
                return redirect()->back()->withInput();
            }

            $photo = $request->file($inputname);
            $name = \Str::slug($request->input('name'));
            $filename = $name. '.' . $photo->getClientOriginalExtension();

            // insert Image
            $Image = new Image();
            $Image->filename = $filename;
            $Image->imageable_id = $imageable_id;
            $Image->imageable_type = $imageable_type;
            $Image->save();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
        }

        return null;

    }

}
