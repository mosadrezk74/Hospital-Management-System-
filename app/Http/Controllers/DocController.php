<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
 use App\Models\Section;
use App\Traits\UploadTratis;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DocController extends Controller
{

    use UploadTratis;

    public function index()
    {
        $doctors = Doctor::all();
        $appointments = Appointment::all();

        $client = new Client();
        $response = $client->get('https://restcountries.com/v2/all');
        $countries = json_decode($response->getBody());




        return view('Dashboard.Doctors.index', compact('doctors', 'appointments', 'countries'));

    }


    public function create()
    {
        $sections = Section::all();
        $appointments = Appointment::all();
        $client = new Client();
        $response = $client->get('https://restcountries.com/v2/all');
        $countries = json_decode($response->getBody());

        return view('Dashboard.Doctors.create',compact('sections' , 'appointments'
        ,'countries'));
    }


    public function store(Request $request)
    {
        DB::beginTransaction();
        $request->validate(
            [
                'phone' => 'required|numeric|digits:11'
            ]
        );

        try {

            $doctors = new Doctor();
            $doctors->name = $request->name;
            $doctors->name_en = $request->name2;
            $doctors->email = $request->email;
            $doctors->password = Hash::make($request->password);

            $doctors->section_id = $request->section_id;
            $doctors->phone = $request->phone;
            $doctors->appointment = $request->appointment;
            $doctors->status = 1;

            $doctors->save();


            //Upload img
            $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$doctors->id,'App\Models\Doctor');

            DB::commit();
            session()->flash('add');

            return redirect()->route('Doctors.create');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function show(string $id)
    {

    }



    public function edit($doctors)
    {
        Doctor::findorfail($doctors);
        return view('Dashboard.Doctors.edit', [
            'doctor' => Doctor::
            find($doctors)
        ]);

    }

    public function status(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->status = $request->input('status');
        $doctor->save();
        return redirect()->route('doctors.index');
    }


    public function update(Request $request, $doctors)
    {

        DB::beginTransaction();

        try {

            $doctor = Doctor::findorfail($doctors);
            $doctor->name = $request->name;
            $doctor->name_en = $request->name2;
            $doctor->email = $request->email;
            $doctor->appointment = $request->appointment;
            $doctor->phone = $request->phone;
            $doctor->status = $request->status;

            $doctor->save();


            // update photo
            if ($request->has('photo')){
                // Delete old photo
                if ($doctor->image){
                    $old_img = $doctor->image->filename;
                    $this->deleteAttachment('upload_image','doctors/'.$old_img,$request->id);
                }
                //Upload img
                $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$request->id,'App\Models\Doctor');
            }

            DB::commit();
            session()->flash('edit');
            return redirect()->back();

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request, $id)
    {

        Doctor::find($id);
        if($request->page_id==1){

            if($request->filename){

                $this->deleteAttachment('upload_image','doctors/'.$request->filename,$request->id,$request->filename);
            }
            Doctor::destroy($request->id);
            session()->flash('delete');
            return redirect()->route('Doctors.index');
        }


        //---------------------------------------------------------------

        else{

            // delete selector doctor
            $delete_select_id = explode(",", $request->delete_select_id);
            foreach ($delete_select_id as $ids_doctors){
                $doctor = Doctor::findorfail($ids_doctors);
                if($doctor->image){
                    $this->deleteAttachment('upload_image','doctors/'.$doctor->image->filename,$ids_doctors,$doctor->image->filename);
                }
            }

            Doctor::destroy($delete_select_id);
            session()->flash('delete');
            return redirect()->route('Doctors.index');


        }



    }
//
//    public function update_password($request)
//    {
//        try {
//            $doctor = Doctor::findorfail($request->id);
//            $doctor->update([
//                'password'=>Hash::make($request->password)
//            ]);
//
//            session()->flash('edit');
//            return redirect()->back();
//        }
//
//        catch (\Exception $e) {
//            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
//        }
//    }
//    public function update_status(Request $request, $doctors)
//    {
//        try {
//            $doctor = Doctor::findorfail($doctors);
//            $doctor->update([
//                'status'=>$request->status
//            ]);
//
//            session()->flash('edit');
//            return redirect()->back();
//        }
//
//        catch (\Exception $e) {
//            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
//        }
//    }
//



}
