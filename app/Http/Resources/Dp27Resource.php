<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp27Resource extends JsonResource
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
            'in_money'=>$this->dp27002,
            'currency'=>$this->fname27003->refd_17002,
            'investment_year'=>$this->dp27004,
            'investment_type'=>$this->fname27005->refd_12002,
        ];
    }
}
