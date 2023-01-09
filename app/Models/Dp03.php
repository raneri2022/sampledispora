<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp03 extends Model
{
    use HasFactory;
    public function countryName(){
        return $this->hasOne(Country::class, 'id','dp03002');
    }

    public function stateName(){
        return $this->hasOne(State::class, 'id','dp03002');
    }
}
