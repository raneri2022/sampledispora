<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp08 extends Model
{
    use HasFactory;

    public function fname08002(){
        return $this->belongsTo(Refd02::class, 'dp08002','id');
    }
}
