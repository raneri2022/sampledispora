<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp30Resource extends JsonResource
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
            'type_of_wealthy_property'=>$this->fname30002->refd_13002,
            'property_name'=>$this->dp30003,
            'property_in_number'=>$this->dp30004,
        ];
    }
}
