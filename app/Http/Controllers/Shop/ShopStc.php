<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Models\Sections\Section;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class ShopStc extends Controller
{


    public function show($product)
    {

        return view('E-Commerce.shop-cart', [

            'product' =>  Pharmacy:: findOrfail($product)

        ]) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function index()
    {
        $products = Pharmacy::all();
        return view('E-commerce.shop' , compact('products') );
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
