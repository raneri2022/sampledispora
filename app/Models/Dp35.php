<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp35 extends Model
{
    use HasFactory;
    protected $casts =  [
        'dp35002' => 'boolean',
    ];
}
