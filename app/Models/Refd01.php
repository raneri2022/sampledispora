<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refd01 extends Model
{
    use HasFactory;

    protected $table = 'refd01s';

    protected $fillable = [
        'id',
        'refd_01002',
        'refd_01003',
    ];
}
