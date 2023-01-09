<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp28 extends Model
{
    use HasFactory;

    public function fname28003(){
        return $this->belongsTo(Refd17::class, 'dp28003','id');
    }

    public function fname28005(){
        return $this->belongsTo(Refd12::class, 'dp28005','id');
    }
}
