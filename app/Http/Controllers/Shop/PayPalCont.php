<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalCont extends Controller
{
    public function payment(){
        $data = [];

        $data['items'] = [
[

'name' => 'الخطة الرئسية ',
'price' => 1000,
'desc' => 'Description',
'qty' => 2
    ],


[
'name' => 'تحميل المحتوي',
'price' => 300,
    'desc' => 'Description',
    'qty' => 2
],

];
$data['invoice_id'] = 1;
$data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
$data['return_url'] = 'https/http://127.0.0.1:8000/payment/success';
$data['cancel_url'] = 'https/http://127.0.0.1:8000/payment/cancel';
$data['total'] = 2600;

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout ($data, true);

        return redirect ($response ['paypal_link']);
    }



    public function cancel(){

        return response()-> json('cann' , 402 );

    }
    public function success(Request $request){

        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails ($request->token);
if (in_array(strtoupper($response ['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
    return response ()->json( data: 'Paid success' );
}
        return response()-> json('cann' , 402 );


    }

}
