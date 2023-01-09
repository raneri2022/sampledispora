<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp16Resource extends JsonResource
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
            'language_name'=>$this->dp16002,
            'read'=>$this->dp16003,
            'write'=>$this->dp16004,
            'speak'=>$this->dp16005,
            'listen'=>$this->dp16006,
        ];
    }
}
