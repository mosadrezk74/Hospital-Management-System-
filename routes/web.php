<?php

use App\Http\Controllers\HomeSTC;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Shop\ShopStc;
use App\Http\Controllers\Website\TeamStc;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('Website.Home.index');
//}) ->name('web.index') ;


Route::get('/shop', [ShopStc::class, 'index']) ->name('web.shop');
Route::get('/shop/{id}', [ShopStc::class, 'show']) ->name('Shops.show');
//Route::get('/cart', [\App\Http\Controllers\Shop\PharmacyController::class, 'add']) ->name('Pharmacy.add');

Route::resource('cart' , \App\Http\Controllers\Shop\CartController::class);


//Route::get('')



Route::resource('Shops', ShopStc::class );


//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){


    Route::get('/', [HomeSTC::class, 'index']) ->name('index');

//--------------------------------------------------------------------------//

    Route::get('/about', function () {
        return view('Website.Home.about');
    })->name('web.about');

//--------------------------------------------------------------------------//

    Route::get('/doctors', function () {
        return view('Website.Home.doctors');
    })->name('web.doctors');

//--------------------------------------------------------------------------//

    Route::get('/doctors-detail', function () {
        return view('Website.Home.doctors-detail');
    })->name('web.Dedoctors');

//--------------------------------------------------------------------------//
/*
    Route::get('/team', function () {
        return view('Website.Home.team');
    })->name('web.team');
*/
//Route::resource('/team', TeamStc::class );
Route::get('/team', [TeamStc::class, 'index']) ->name('web.team');
Route::get('/team/{id}', [TeamStc::class, 'show']) ->name('team.show');



//--------------------------------------------------------------------------//

    Route::get('/contact', function () {
        return view('Website.Home.contact');
    })->name('web.contact');
//--------------------------------------------------------------------------//

    Route::get('/services', function () {
        return view('Website.Home.services');
    })->name('web.services');
//--------------------------------------------------------------------------//

    Route::get('/shop-single', function () {
        return view('Website.Home.shop-single');
    })->name('web.shopSingle');
//--------------------------------------------------------------------------//

    Route::get('/department', function () {
        return view('Website.Home.department');
    })->name('web.department');
//--------------------------------------------------------------------------//

    Route::get('/department-detail', function () {
        return view('Website.Home.department-detail');
    })->name('web.departmentDet');
//--------------------------------------------------------------------------//

//    Route::get('/shop', function () {
//        return view('Website.shop');
//    })->name('web.shop');



Route::get('/payment', [\App\Http\Controllers\Shop\PayPalCont::class, 'payment']) ->name('web.payment');
Route::get('/payment/cancel', [\App\Http\Controllers\Shop\PayPalCont::class, 'cancel']) ->name('web.cancel');
Route::get('/payment/success', [\App\Http\Controllers\Shop\PayPalCont::class, 'success']) ->name('web.success');



//--------------------------------------------------------------------------//
    Route::get('/faq', function () {
        return view('Website.Home.faq');
    })->name('web.faq');
//--------------------------------------------------------------------------//
    Route::get('/gallery', function () {
        return view('Website.Home.gallery');
    })->name('web.gallery');
//--------------------------------------------------------------------------//

    Route::get('/soon', function () {
        return view('Website.Home.comming-soon');
    })->name('web.soon');
//--------------------------------------------------------------------------//

    Route::get('/blog', function () {
        return view('Website.blog');
    })->name('web.blog');
//--------------------------------------------------------------------------//
    Route::get('/blog-classic', function () {
        return view('Website.blog-classic');
    })->name('web.Home.classblog');
//--------------------------------------------------------------------------//
    Route::get('/blog-detail', function () {
        return view('Website.Home.blog-detail');
    })->name('web.Detblog');
//--------------------------------------------------------------------------//
     Route::get('/shoping-cart', function () {
        return view('Website.Home.shoping-cart');
    })->name('web.shopingcart');
//--------------------------------------------------------------------------//
    Route::get('/shop-single', function () {
        return view('Website.Home.shop-single');
    })->name('web.shopingsingle');
//--------------------------------------------------------------------------//


  Route::get('/dashboard', function () {
      return view('dashboard');
  })->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 });

 require __DIR__.'/auth.php';
