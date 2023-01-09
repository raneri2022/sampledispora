<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp29 extends Model
{
    use HasFactory;
    public function fname29002(){
        return $this->belongsTo(Refd13::class, 'dp29002','id');
    }
}
