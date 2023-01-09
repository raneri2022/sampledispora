<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp17 extends Model
{
    use HasFactory;
//        protected $casts =  [
//        'dp17002' => 'boolean',
//    ];

    public function fname17002(){
        return $this->belongsTo(Refd14::class, 'dp17002','id');
    }
}
