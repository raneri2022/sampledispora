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


    public function dp01(){
        return $this->hasOne(Dp01::class, 'personal_id','personal_id');
    }

    public function dp02(){
        return $this->hasOne(Dp02::class, 'personal_id','personal_id');
    }

    public function dp03(){
        return $this->hasOne(Dp03::class, 'personal_id','personal_id');
    }

    public function dp04(){
        return $this->hasOne(Dp04::class, 'personal_id','personal_id');
    }

    public function dp05s(){
        return $this->hasMany(Dp05::class, 'personal_id','personal_id');
    }

    public function dp08(){
        return $this->hasOne(Dp08::class, 'personal_id','personal_id');
    }
    public function dp09(){
        return $this->hasOne(Dp09::class, 'personal_id','personal_id');
    }
    public function dp10(){
        return $this->hasOne(Dp10::class, 'personal_id','personal_id');
    }
    public function dp11(){
        return $this->hasOne(Dp11::class, 'personal_id','personal_id');
    }
        public function dp37(){
        return $this->hasOne(Dp37::class, 'personal_id','personal_id');
    }
        public function dp12(){
        return $this->hasOne(Dp12::class, 'personal_id','personal_id');
    }

       public function dp14s(){
        return $this->hasMany(Dp14::class, 'personal_id','personal_id');
    }

           public function dp15s(){
        return $this->hasMany(Dp15::class, 'personal_id','personal_id');
    }
           public function dp16s(){
        return $this->hasMany(Dp16::class, 'personal_id','personal_id');
    }


            public function dp17(){
        return $this->hasOne(Dp17::class, 'personal_id','personal_id');
    }


            public function dp31(){
        return $this->hasOne(Dp31::class, 'personal_id','personal_id');
    }

          public function dp20s(){
        return $this->hasMany(Dp20::class, 'personal_id','personal_id');
    }

    public function dp40(){
        return $this->hasOne(Dp40::class, 'personal_id','personal_id');
    }

    public function dp32(){
        return $this->hasOne(Dp32::class, 'personal_id','personal_id');
    }
    public function dp38(){
        return $this->hasOne(Dp38::class, 'personal_id','personal_id');
    }


    public function dp21s(){
        return $this->hasMany(Dp21::class, 'personal_id','personal_id');
    }

    public function dp22(){
        return $this->hasOne(Dp22::class, 'personal_id','personal_id');
    }

    public function dp23(){
        return $this->hasOne(Dp23::class, 'personal_id','personal_id');
    }

    public function dp25(){
        return $this->hasOne(Dp25::class, 'personal_id','personal_id');
    }
    public function dp26(){
        return $this->hasOne(Dp26::class, 'personal_id','personal_id');
    }

    public function dp30s(){
        return $this->hasMany(Dp30::class, 'personal_id','personal_id');
    }


    public function dp27s(){
        return $this->hasMany(Dp27::class, 'personal_id','personal_id');
    }


    public function dp29s(){
        return $this->hasMany(Dp29::class, 'personal_id','personal_id');
    }

    public function dp33(){
        return $this->hasOne(Dp33::class, 'personal_id','personal_id');
    }

    public function dp34(){
        return $this->hasOne(Dp34::class, 'personal_id','personal_id');
    }

    public function dp35(){
        return $this->hasOne(Dp35::class, 'personal_id','personal_id');
    }

    public function dp36(){
        return $this->hasOne(Dp36::class, 'personal_id','personal_id');
    }
    public function dp39(){
        return $this->hasOne(Dp39::class, 'personal_id','personal_id');
    }
    public function dp41(){
        return $this->hasOne(Dp41::class, 'personal_id','personal_id');
    }

    public function dp42(){
        return $this->hasOne(Dp42::class, 'personal_id','personal_id');
    }
    public function dp28s(){
        return $this->hasMany(Dp28::class, 'personal_id','personal_id');
    }


//    public function dp30s(){
//        return $this->hasMany(Dp30::class, 'personal_id','personal_id');
//    }




    public function isformcompleted(){
        return $this->hasOne(IsFormCompleted::class, 'personal_id','personal_id');
    }




    /////////////////////////////////for controllers///////////////////

    public function con02(){
        return $this->hasMany(Dp02::class, 'personal_id','personal_id');
    }

    public function con01(){
        return $this->hasMany(Dp01::class, 'personal_id','personal_id');
    }


//    public function con01count()
//    {
//        return $this->con01()
//            ->where('dp01002','=','2')
//            ->selectRaw('personal_id, count(*) as aggregate')
//            ->groupBy('personal_id');
//    }
//    public function con02count()
//    {
//        return $this->con02()
//            ->selectRaw('personal_id, count(*) as aggregate')
//            ->groupBy('personal_id');
//    }



}
