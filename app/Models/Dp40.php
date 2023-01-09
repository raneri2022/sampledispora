<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp40 extends Model
{
    use HasFactory;
    protected $casts =  [
        'dp40002' => 'boolean',
        ];
}
