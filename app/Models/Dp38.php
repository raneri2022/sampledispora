<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp38 extends Model
{
    use HasFactory;
    protected $casts =  [
        'dp38002' => 'boolean',
    ];
}
