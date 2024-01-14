<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Url;


class PharmacyController extends Controller
{
    public function index()
    {
        $products = Pharmacy::all();
        return view('Dashboard.Pharmacy.index' , compact('products') );
    }


    public function create()
    {
        $products = Pharmacy::all();
        return view('Dashboard.Pharmacy.create' , compact('products') );
    }


    public function store(Request $request)
    {

        try {
            $products=New Pharmacy();
            $products->name=$request->name;
            $products->price=$request->price;
            $products->quantity=$request->quantity;
            $products->des=$request->des;
            $products->save();

            //Upload img
            $this->ProImage($request,'photo','products','upload_image',$products->id,'App\Models\Pharmacy');

            DB::commit();
            session()->flash('add');
            return redirect()->route('Pharmacy.create');





        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);}

        }





    public function show(string $id)
    {

    }


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




    public function ProImage(Request $request, $inputname , $foldername , $disk, $imageable_id, $imageable_type) {

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
