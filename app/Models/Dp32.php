<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp32 extends Model
{
    use HasFactory;
    protected $casts =  [
        'dp32002' => 'boolean',
    ];
}
