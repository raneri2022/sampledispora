<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refd20 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'refd_20002',
        'refd_20003',
    ];
}
