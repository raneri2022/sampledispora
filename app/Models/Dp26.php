<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp26 extends Model
{
    use HasFactory;
    public function fname26002(){
        return $this->belongsTo(Refd11::class, 'dp26002','id');
    }

    public function fname26003(){
        return $this->belongsTo(Refd17::class, 'dp26003','id');
    }
}
