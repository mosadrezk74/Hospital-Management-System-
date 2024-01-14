<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use PharIo\Manifest\Url;

class Pharmacy extends Model
{
    use HasFactory;

    protected $table='pharmacies';


    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function products()
    {
        return $this->hasMany(Pharmacy::class);
    }

}


