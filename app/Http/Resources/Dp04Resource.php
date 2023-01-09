<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp04Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'f_mother_name'=>$this->dp04002,
            'm_mother_name'=>$this->dp04003,
            'l_mother_name'=>$this->dp04004,
            'mother_place_origin'=>$this->countryName->name,

        ];
    }
}
