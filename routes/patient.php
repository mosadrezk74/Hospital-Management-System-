<?php


use App\Http\Controllers\Dashboard\DashController;
//use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\Doctor\InvoiceController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\MedicalController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/**
 * @return void
 */
function getGroup(): void
{
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
        ], function () {

        //################################ dashboard patient ########################################
        Route::get('/dashboard/patient', function () {

            return view('Dashboard.dashboard_patient.dashboard');

        })->middleware(['auth:patient'])->name('dashboard.patient');
        //################################ end dashboard patient #####################################

        Route::middleware(['auth:patient'])->group(function () {

            //############################# patients route ##########################################
            Route::get('invoices', [PatientController::class, 'invoices'])->name('invoices.patient');
            Route::get('laboratories', [PatientController::class, 'laboratories'])->name('laboratories.patient');
            Route::get('view_laboratories/{id}', [PatientController::class, 'viewLaboratories'])->name('laboratories.view');
            Route::get('rays', [PatientController::class, 'rays'])->name('rays.patient');
            Route::get('view_rays/{id}', [PatientController::class, 'viewRays'])->name('rays.view');
            Route::get('payments', [PatientController::class, 'payments'])->name('payments.patient');
            //############################# end patients route ######################################

        });


        require __DIR__ . '/auth.php';

    });
}

getGroup();




