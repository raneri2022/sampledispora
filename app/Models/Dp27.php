<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp27 extends Model
{
    use HasFactory;
    public function fname27003(){
        return $this->belongsTo(Refd17::class, 'dp27003','id');
    }

    public function fname27005(){
        return $this->belongsTo(Refd12::class, 'dp27005','id');
    }
}
