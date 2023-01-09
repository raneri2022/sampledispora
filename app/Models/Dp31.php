<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp31 extends Model
{
    use HasFactory;

    public function namerefd31002(){
        return $this->hasOne(Dp31::class, 'dp31002','id');
    }

    public function fname31002(){
        return $this->belongsTo(Refd07::class, 'dp31002','id');
    }
}
