<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminContoller extends Controller
{

    public function index()
    {

    }

    public function create()
    {
//        return view('Dashboard.User.auth.login');

    }


    public function store(AdminLoginRequest $request)

    {

        if($request->authenticate()){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::ADMIN);

        }else{

            return redirect() -> back() -> withErrors([ 'name' =>(trans('Dashboard/login_trans.Fail')) ]);

        }

    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(Request $request)
    {



        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');










    }
}
