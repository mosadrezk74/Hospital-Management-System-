<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundBox extends Model
{
    use HasFactory;
    protected $table='fund_boxes';
    public function Inv()
    {
        return $this->belongsTo(single_invoice::class,'single_invoice_id');
    }

    public function FundBox()
    {
        return $this->hasMany(FundBox::class);
    }

}
