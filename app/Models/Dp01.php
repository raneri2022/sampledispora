<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dp01 extends Model
{
    use HasFactory;


        protected $casts =  [

        // 'dp01005' => 'date:Y-m-d',

    ];


    protected $table = 'dp01s';

    protected $fillable = [
        'personal_id',
        'dp01002',
        'dp01003',
        'dp01004',
        'dp01005',
        'dp01006',
    ];

        public function fname01002()
    {
        return $this->belongsTo(Refd01::class, 'dp01002', 'id');
    }
    public function countryName(){
        return $this->hasOne(Country::class, 'id','dp01002');
    }

    public function stateName(){
        return $this->hasOne(State::class, 'id','dp01002');
    }

}
