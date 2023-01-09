<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp29Resource extends JsonResource
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
            'type_of_wealthy_property'=>$this->fname29002->refd_13002,
            'property_name'=>$this->dp29003,
            'property_in_number'=>$this->dp29004,
        ];
    }
}
