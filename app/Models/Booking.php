<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table ='bookings';

    public $fillable= ['name','phone','appointment','section_id','doctor_id'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');

    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }







}
