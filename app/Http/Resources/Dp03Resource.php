<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp03Resource extends JsonResource
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
            'country_place_of_origin_name'=>$this->countryName->name,
            'state_or_region_place_of_origin_name'=>$this->stateName->name,
            'city_or_town_or_village_place_of_origin_name'=>$this->dp03004,
        ];
    }
}
