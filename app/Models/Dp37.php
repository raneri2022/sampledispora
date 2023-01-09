<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp37 extends Model
{
    use HasFactory;

//    protected $casts =  [
//
//        'dp37002' => 'boolean',
//
//    ];

    public function fname37002(){
        return $this->belongsTo(Refd14::class, 'dp37002','id');
    }


}
