<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp02 extends Model
{
    use HasFactory;

    public function countryName(){
        return $this->hasOne(Country::class, 'id','dp02002');
    }

    public function stateName(){
        return $this->hasOne(State::class, 'id','dp02002');
    }


}
