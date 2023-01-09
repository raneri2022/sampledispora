<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp25 extends Model
{
    use HasFactory;
    public function fname25002(){
        return $this->belongsTo(Refd09::class, 'dp25002','id');
    }
}
