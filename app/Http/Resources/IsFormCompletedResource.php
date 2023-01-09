<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IsFormCompletedResource extends JsonResource
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
            'id' =>$this->id,
            'personal_id' =>$this->personal_id,
            'f_name' => $this->personal->f_name_personal,
            'm_name' => $this->personal->m_name_personal,
            'l_name' => $this->personal->l_name_personal,
            'gender' => $this->dp01->dp01002,
            'email' => $this->dp11->dp11002,
            'country' => $this->dp02->dp02002,
            'mobile' => $this->dp09->dp09002,
            'time' => now(),
        ];
    }
}
