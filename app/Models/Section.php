<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table ='sections';
    public $fillable= ['name','name_en','description'];






    public function deleteOldRecord(): void
    {
       $oldRecord = $this->where('id', '<>', $this->id)->first();

       if ($oldRecord) {
           $oldRecord->delete();
       }
   }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

}
