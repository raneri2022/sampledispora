<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp14Resource extends JsonResource
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
            'p_country_name'=>$this->countryName->name,
            'p_region_or_state'=>$this->stateName->name,
            'p_city_name'=>$this->dp14004,
            'p_from_year'=>$this->dp14005,
            'p_to_year'=>$this->dp14006,
        ];
    }
}
