<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Refd15Resource extends JsonResource
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
             'id' => $this->id,
            'refd_15002' => $this->refd_15002,
            'refd_15003' => $this->refd_15003,
        ];
    }
}
