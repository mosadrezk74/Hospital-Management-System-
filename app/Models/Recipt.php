<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipt extends Model
{
    use HasFactory;
    protected $table='recipts';

    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
    public function Recipts()
    {
        return $this->hasMany(Recipt::class);
    }


}
