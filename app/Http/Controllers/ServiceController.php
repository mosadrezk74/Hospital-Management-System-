<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();

        return view('Dashboard.Services.index',  compact('services'  ));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $services = new Service();
        $services->name = $request->name;
        $services->name_en = $request->name_en;
        $services->price = $request->price;
        $services->description = $request->description;
        $services->status = 1;

        $services->save();
        return redirect()->route('Services.index')
            ;
    }


    public function show(string $id)
    {
        //
    }


    public function edit($service)
    {
        return view('Dashboard.Services.edit', [
            'section' => Service::
            find($service)
        ]);

    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $service)
    {
        Service::findOrFail($service);

        $service = new Service();
        $service->name = $request->name;
        $service->name_en = $request->name_en;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->status = $request->status;

        $service->deleteOldRecord();

        $service->save();

        return redirect()->route('Services.index' , $service );
    }



    public function destroy($service)
    {

        $to_delete = Service::findorfail($service);
        $to_delete ->delete();
        return redirect() -> route('Services.index');

    }
}
