<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp20 extends Model
{
    use HasFactory;

    public function fname20006(){
        return $this->belongsTo(Refd06::class, 'dp20006','id');
    }
}
