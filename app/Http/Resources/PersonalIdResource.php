<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalIdResource extends JsonResource
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

            'personal_id' => $this->personal_id,
            'f_name_personal' => $this->f_name_personal,
            'm_name_personal' => $this->m_name_personal,
            'l_name_personal' => $this->l_name_personal,



            'personal_info' => new Dp01Resource($this->dp01),

            'address' => new Dp02Resource($this->dp02),

            'origin' => new Dp03Resource($this->dp03),

            'mother' => new Dp04Resource($this->dp04),

            'mother_tongue' =>$this->dp42->fname42002->refd_15002,

            'mother_tongue_others' => $this->dp41->dp41002,

            'national_identity' => Dp05Resource::collection($this->dp05s),

            'marital_status' => $this->dp08->fname08002->refd_02002,

            'primary_mobile' => $this->dp09->dp09002,

            'secondary_mobile' => $this->dp10->dp10002,

            'email' => $this->dp11->dp11002,

            'migrated_from_eritrea' =>$this->dp37->fname37002->refd_14002,

            'migration_year' =>$this->dp12->dp12002,

            'changed_residence_before' =>$this->dp38->dp38002,

             'previously_setteled' => Dp14Resource::collection($this->dp14s),
            'do_you_have_relatives_in_eritrea' => $this->dp39->dp39002,
             'relative' => Dp15Resource::collection($this->dp15s),

             'language' => Dp16Resource::collection($this->dp16s),

             'Are_you_enrolled_educational_institution_now' =>$this->dp17->fname17002->refd_14002,

             'currently_enrolled_in' =>$this->dp31->fname31002->refd_07002,

             'do_you_have_education_level_obtained' =>$this->dp40->dp40002,

             'certification_obtained' => Dp20Resource::collection($this->dp20s),

            'skill_obtained_through_experience' =>$this->dp32->dp32002 !==null ? $this->dp32->dp32002:'' ,
            'skill' =>  Dp21Resource::collection($this->dp21s),
            'employment_type' => $this->dp22->fname22002->refd_08002,
            'current_occupation' => $this->dp23->dp23002,

            'sector_of_employment' => $this->dp25->fname25002->refd_09002 !==null ? $this->dp25->fname25002->refd_09002:'',

            'money_income' => $this->dp26->fname26002->refd_11002,
            'currency' => $this->dp26->fname26003->refd_17002,

            'have_investment_in_eritrea' => $this->dp33->dp33002,
            'investement_in_eritrea' => Dp27Resource::collection($this->dp27s),

            'have_property_in_eritrea' => $this->dp35->dp35002,
            'property_in_eritrea' => Dp29Resource::collection($this->dp29s),

            'have_investment_outside_eritrea' => $this->dp34->dp34002,
            'investement_outside_eritrea' => Dp28Resource::collection($this->dp28s),

            'have_property_outside_eritrea' => $this->dp36->dp36002,
            'property_outside_eritrea' => Dp30Resource::collection($this->dp30s),

            'time' => now(),

            ////////////////////mobile number her ///////////////////////////


        ];
    }
}
