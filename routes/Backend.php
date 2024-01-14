<?php

use App\Http\Controllers\Dashboard\DashController;
//use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\Doctor\InvoiceController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\MedicalController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use  App\Events\myevent;
use Illuminate\Support\Facades\Event;





Route::get('/Dashboard_Admin', [DashController::class, 'index']);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


    //################################ dashboard user ##########################################

    Route::get('/dashboard/user', function () {
        return view('Dashboard.User.dashboard');
    })->middleware(['auth'])->name('dashboard.user');

    //################################ end dashboard user #####################################


    //################################ dashboard doctor ##########################################

    Route::get('/dashboard/doctor', function () {




        return view('Dashboard.Doctor_Dashboard.dashboard');

    })->middleware(['auth:doctor'])->name('dashboard.doctor');

    //################################ end dashboard doctor #####################################



    //################################ dashboard admin ########################################
//    Route::get('/dashboard/admin', function () {
//        return view('Dashboard.Admin.dashboard');
//
//    })->middleware(['auth:admin'])->name('dashboard.admin');


    Route::get('/dashboard/admin'  , [DashController::class,'index'])->name('dashboard.admin')
    ->middleware(['auth:admin']);

    //################################ end dashboard admin #####################################

//---------------------------------------------------------------------------------------------------------------

    Route::middleware(['auth:admin'])->group(function () {


        Route::get('/countries'  , [\App\Http\Controllers\Test\CountryController::class,'index']);




        Route::resource('profile' , \App\Http\Controllers\ProfileController::class );


        //############################# sections route ##########################################
        Route::resource('Sections', SectionController::class);
        //############################# end sections route ######################################

        //############################# doctors route ##########################################
        Route::resource('Doctors', DocController::class);

        //############################# end doctors route ######################################


        //############################# Services route ##########################################
        Route::resource('Services', \App\Http\Controllers\ServiceController::class);

        //############################# end Services route ######################################


        //############################# Services route ##########################################
        Route::resource('Services', \App\Http\Controllers\ServiceController::class);

        //############################# end Services route ######################################


        //############################# GroupServices route ##########################################

        Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');

        //############################# end GroupServices route #####################################

        //############################# GroupServices route ##########################################


        Route::get('/test', function () {
            return view('livewire.include_test');
        }) ->name('Counter') ;


        //############################# end GroupServices route #####################################



        //############################# Booking route ##########################################

        Route::resource('Bookings', \App\Http\Controllers\BookingController::class);
        Route::get('/dashboard/admin\Book-Veiw', [\App\Http\Controllers\BookingController::class,'show'])
            ->name('Bookings.show');


        //############################# end Booking route ######################################

        //############################# InsuranceCont   route ####################################

        Route::resource('Insurances', \App\Http\Controllers\InsuranceCont::class);

        //############################# end InsuranceCont   route #################################


        //############################# InsuranceCont   route ####################################

        Route::resource('Pharmacy', \App\Http\Controllers\shop\PharmacyController::class);

        //############################# end InsuranceCont   route #################################



        //############################# Patients   route ##########################################

        Route::resource('Patients', \App\Http\Controllers\Dashboard\PatientController::class);


        //############################# end InsuranceCont   route ######################################


        //############################# Ambulance route ##########################################

        Route::resource('Ambulance', \App\Http\Controllers\Dashboard\AmbulanceController::class);

        //############################# end Ambulance   route ######################################

        //############################# GroupServices route ##########################################

        Route::view('SingleInvoices','livewire.SingleInvoices.index')->name('SingleInvoices');


        Route::view('Print_single_invoices','livewire.SingleInvoices.print')->name('Print_single_invoices');


        //############################# end GroupServices route #####################################

        //#############################Invoices route ####################################

        Route::resource('Invoices', \App\Http\Controllers\InsuranceCont::class);

        //############################# end InsuranceCont   route #################################

        //#############################Invoices route ####################################

        Route::resource('Recipts', \App\Http\Controllers\ReciptController::class);

        //############################# end InsuranceCont   route #################################

        //#############################Invoices route ####################################

        Route::resource('Payments', \App\Http\Controllers\RaymentController::class);

        //############################# end InsuranceCont   route #################################

        //############################# RayMans route ##########################################

        Route::resource('RaysMans', \App\Http\Controllers\RayManController::class);


        //############################# end Laboratories route ######################################




    });

    Route::middleware(['auth:doctor'])->group(function () {

        Route::get('/dashboard/doctor'  , [App\Http\Controllers\Dashboard\DashDocController::class,'index'])->name('dashboard.doctor')
            ->middleware(['auth:doctor']);

        //############################# completed_invoices route ##########################################
        Route::get('completed_invoices', [InvoiceController::class,'completedInvoices'])->name('completedInvoices');
        //############################# end invoices route ################################################

        //############################# review_invoices route ##########################################
        Route::get('review_invoices', [InvoiceController::class,'reviewInvoices'])->name('reviewInvoices');
        //############################# end invoices route #############################################


        //############################# invoices route ##########################################


        Route::resource('invoices', InvoiceController::class);

        //############################# end invoices route ######################################


        //############################# review_invoices route ##########################################
        Route::post('add_review', [MedicalController::class,'addReview'])->name('add_review');
        //############################# end invoices route #############################################


        //############################# Medical route ##########################################


        Route::resource('medicals', \App\Http\Controllers\MedicalController::class);

        //############################# end invoices route ######################################


        //############################# rays route ##########################################

        Route::resource('rays', \App\Http\Controllers\RayController::class);

        //############################# end rays route ######################################


        //############################# rays route ##########################################

        Route::get('patient_details/{id}', [\App\Http\Controllers\PatientDetialController::class,'index'])->name('patient_details');

        //############################# end rays route ######################################


        //############################# Laboratories route ##########################################

        Route::resource('Labs', LabController::class);

        //############################# end Laboratories route ######################################

        Route::get('add-message', [\App\Http\Controllers\MessageSTC::class,'index'])->name('message.add');


    });






    #################################################################################
    #################################################################################
    #################################################################################


    //################################ dashboard doctor ########################################

    Route::get('/dashboard/ray_emp', function () {

        return view('Dashboard.dashboard_RayEmployee.dashboard');

    })->middleware(['auth:ray_emp'])->name('dashboard.rayman');


    //################################ end dashboard doctor #####################################

    Route::middleware(['auth:ray_emp'])->group(function () {

        //############################# invoices route ##########################################
//        Route::resource('invoices_ray_employee', InvoiceController::class);
        //############################# end invoices route ######################################


    });





        require __DIR__.'/auth.php';


});





















