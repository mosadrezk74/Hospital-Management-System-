<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundPatientBox extends Model
{
    use HasFactory;
    public function Inv()
    {
        return $this->belongsTo(single_invoice::class,'single_invoice_id');
    }
    public function FundBox2()
    {
        return $this->hasMany(FundPatientBox::class);
    }

}
