<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'notes'=>$this->notes,
            'insurance_code'=>$this->insurance_code,
            'discount_percentage'=>$this->discount_percentage,
            'Company_rate'=>$this->Company_rate,
            'status'=>$this->status,
        ];
    }
}
