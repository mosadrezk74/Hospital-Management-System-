<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    use HasFactory;
    protected $table='payment_accounts';


    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function single_invoice()
    {
        return $this->belongsTo(single_invoice::class,'single_invoice_id');
    }

    public function ReceiptAccount()
    {
        return $this->belongsTo(Recipt::class,'recipt_id');
    }


    public function PaymentAccount()
    {
        return $this->belongsTo(PaymentAccount::class,'Payment_id');
    }
}
