<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp16 extends Model
{
    use HasFactory;
       protected $casts =  [

        
        'dp16003' => 'boolean',
        'dp16004' => 'boolean',
        'dp16005' => 'boolean',
        'dp16006' => 'boolean',

    ];
}
