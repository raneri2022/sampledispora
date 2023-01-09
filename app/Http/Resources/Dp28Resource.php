<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp28Resource extends JsonResource
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
            'in_money'=>$this->dp28002,
            'currency'=>$this->fname28003->refd_17002,
            'investment_year'=>$this->dp28004,
            'investment_type'=>$this->fname28005->refd_12002,
        ];
    }
}
