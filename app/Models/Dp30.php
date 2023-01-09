<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp30 extends Model
{
    use HasFactory;
    public function fname30002(){
        return $this->belongsTo(Refd13::class, 'dp30002','id');
    }
}
