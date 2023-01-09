<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp04 extends Model
{
    use HasFactory;

    public function countryName(){
        return $this->hasOne(Country::class, 'id','dp04005');
    }
}
