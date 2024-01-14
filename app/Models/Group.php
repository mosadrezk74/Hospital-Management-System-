<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
     use HasFactory;
//     public $fillable= ['Total_before_discount','discount_value','Total_after_discount','tax_rate','Total_with_tax'];
    public $guarded=[];

    public function service_group()
    {
        return $this->belongsToMany(Service::class,'pivots');

    }


public function deleteOldRecord()
{
    $oldRecord = $this->where('id', '<>', $this->id)->first();
    if ($oldRecord) {
        $oldRecord->delete();
    }
}
}


