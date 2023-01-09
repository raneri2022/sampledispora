<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp42 extends Model
{
    use HasFactory;

    public function ref(){
        return $this->hasOne(Refd15::class, 'id','dp42002');
    }

    public function fname42002(){
        return $this->belongsTo(Refd15::class, 'dp42002','id');
    }
}
