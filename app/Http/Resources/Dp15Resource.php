<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp15Resource extends JsonResource
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
            'f_name_relative'=>$this->dp15002,
            'm_name_relative'=>$this->dp15003,
            'l_name_relative'=>$this->dp15004,
            'zoba_name_relative'=>$this->fname15005->refd_03002,
            'city_village_name'=>$this->dp15006,
            'relative_relationship'=>$this->fname15007->refd_04002,
        ];
    }
}
