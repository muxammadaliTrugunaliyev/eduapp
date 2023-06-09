<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Staff extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'position'=>$this->position,
            'phone'=>$this->phone,
            'image'=>'/admin/images/staffs/'.$this->image,
            'organization'=>$this->organization->name ?? null
        ];
    }
}
