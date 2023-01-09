<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp06 extends Model
{
    use HasFactory;

        protected $table = 'dp06s';

    protected $fillable = [
            'dp06002',
    ];

           public function fname06002()
    {
        return $this->belongsTo(Dp06::class, 'n_id', 'n-id');
    }
}
