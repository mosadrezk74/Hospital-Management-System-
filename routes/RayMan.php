<?php

use App\Http\Controllers\Dashboard\DashController;
//use App\Http\Controllers\Dashboard\SectionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


    //################################ dashboard doctor ########################################

    Route::get('/dashboard/ray_employee', function () {

        return view('Dashboard.dashboard_RayEmployee.dashboard');

    })->middleware(['auth:rayman'])->name('dashboard.ray_employee');


    //################################ end dashboard doctor #####################################

//---------------------------------------------------------------------------------------------------------------


    require __DIR__ . '/auth.php';

});








