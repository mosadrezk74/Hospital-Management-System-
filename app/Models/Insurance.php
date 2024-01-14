<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $fillable=[ 'name' , 'insurance_code' , 'discount_percentage' , 'Company_rate' , 'status'  ];

    public function deleteOldRecord()
    {
        $oldRecord = $this->where('id', '<>', $this->id)->first();
        if ($oldRecord) {
            $oldRecord->delete();
        }
    }

}
