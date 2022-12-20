<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalId extends Model
{
    use HasFactory;

    protected $table = 'personal_ids';

    protected $fillable = [
            'personal_id',
            'f_name_personal',
            'm_name_personal',
            'l_name_personal',
    ];
}
