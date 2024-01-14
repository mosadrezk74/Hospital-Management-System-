<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table ='services';

    public function deleteOldRecord()
    {
        $oldRecord = $this->where('id', '<>', $this->id)->first();

        if ($oldRecord) {
            $oldRecord->delete();
        }
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }

}
