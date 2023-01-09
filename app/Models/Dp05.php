<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp05 extends Model
{
    use HasFactory;


        public function dp06(){
        return $this->hasOne(Dp06::class, 'n_id','n_id');
    }

            public function dp07(){
        return $this->hasOne(Dp07::class, 'n_id','n_id');
    }

    public function countryName(){
        return $this->hasOne(Country::class, 'id','dp05002');
    }
}
