<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;
    protected $table ='patients';


    public $fillable= ['name','Address','email','password','Date_Birth','Phone ','Gender','Blood_Group'
    ,'created_at',
        'updated_at'



    ];

    public function deleteOldRecord()
    {
        $oldRecord = $this->where('id', '<>', $this->id)->first();
        if ($oldRecord) {
            $oldRecord->delete();
        }
    }
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }


}
