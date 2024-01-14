<?php

namespace App\Models\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table ='sections';





    public function deleteOldRecord()
   {
       $oldRecord = $this->where('id', '<>', $this->id)->first();

       if ($oldRecord) {
           $oldRecord->delete();
       }
   }

}
