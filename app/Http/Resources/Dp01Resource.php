<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp01Resource extends JsonResource
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
            'gender'=>$this->fname01002->refd_01002,
            'dob'=>$this->dp01003,
            'place_of_birth_country_name'=>$this->countryName->name,
            'place_of_birth_state_or_region_name'=>$this->stateName->name,
            'place_of_birth_city_name'=>$this->dp01006,
        ];
    }
}
