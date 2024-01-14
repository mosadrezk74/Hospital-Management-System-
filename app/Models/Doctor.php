<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable

{


    use HasFactory;
    protected $table ='doctors';
    public $fillable= ['email','email_verified_at','password','phone','name','section_id','app_id','status'];



    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function deleteOldRecord()
    {
        $oldRecord = $this->where('id', '<>', $this->id)->first();

        if ($oldRecord) {
            $oldRecord->delete();
        }
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
