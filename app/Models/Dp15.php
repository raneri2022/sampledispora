<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp15 extends Model
{
    use HasFactory;

    public function fname15005(){
        return $this->belongsTo(Refd03::class, 'dp15005','id');
    }

    public function fname15007(){
        return $this->belongsTo(Refd04::class, 'dp15007','id');
    }
}
