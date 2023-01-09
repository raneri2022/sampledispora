<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp20Resource extends JsonResource
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
            'number_of_years_learned'=>$this->dp20002,
            'type_of_eduction'=>$this->dp20003,
            'graduated_year'=>$this->dp20004,
            'place_of_eduction'=>$this->dp20005,
            'certificate'=>$this->fname20006->refd_06002,

        ];
    }
}
