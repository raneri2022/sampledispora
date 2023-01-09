<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp22 extends Model
{
    use HasFactory;
//    protected $casts =  [
//        'dp22002' => 'boolean',
//    ];

    public function fname22002(){
        return $this->belongsTo(Refd08::class, 'dp22002','id');
    }
}
