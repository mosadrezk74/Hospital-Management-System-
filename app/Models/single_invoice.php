<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class single_invoice extends Model
{
    protected $guarded=[];

    public function Service()
    {
        return $this->belongsTo(Service::class,'Service_id');
    }

    public function Patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function Section()
    {
        return $this->belongsTo(Section::class,'section_id');
    }

    public function Sin()
    {
        return $this->hasMany(single_invoice::class);
    }
    public function deleteOldRecord()
    {
        $oldRecord = $this->where('id', '<>', $this->id)->first();
        if ($oldRecord) {
            $oldRecord->delete();
        }
    }

}
