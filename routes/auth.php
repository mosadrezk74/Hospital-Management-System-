<?php

use App\Http\Controllers\Auth\AdminContoller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\DoctorController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RayController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');


//################################## Route User ##############################################

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest')->name('login.user');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout.user');

//################################## Route Admin ##############################################

Route::get('/login/admin', [AdminContoller::class, 'create'])->middleware('guest')->name('login.admin');

Route::post('/login/admin', [AdminContoller::class, 'store'])->middleware('guest')->name('login.admin');

Route::post('/logout/admin', [AdminContoller::class, 'destroy'])->middleware('auth:admin')->name('logout.admin');


//#############################################################################################


//################################## Route Doctor ##############################################

//Route::get('/login/doctor', [DoctorController::class, 'create'])->middleware('guest')->name('login.doctor');


Route::post('/login/doctor', [DoctorController::class, 'store'])->middleware('guest')->name('login.doctor');

Route::post('/logout/doctor', [DoctorController::class, 'destroy'])->middleware('auth:doctor')->name('logout.doctor');


//#############################################################################################


//################################## Route RayEmployee ##############################################

Route::post('/login/ray_employee', [\App\Http\Controllers\RayManController::class, 'store'])->middleware('guest')->name('login.ray_employee');

Route::post('/logout/ray_employee', [\App\Http\Controllers\RayManController::class, 'destroy'])->middleware('auth:ray_emp')->name('logout.ray_employee');

//#############################################################################################



//################################## Route RayEmployee ##############################################

Route::post('/login/user', [\App\Http\Controllers\Auth\PatientCNT::class, 'store'])->middleware('guest')->name('login.user');

Route::get('/logout/user', [\App\Http\Controllers\Auth\PatientCNT::class, 'destroy'])->middleware('auth:web')->name('logout.user');

//#############################################################################################



Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout.user');
