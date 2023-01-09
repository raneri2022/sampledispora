<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsFormCompleted extends Model
{
    use HasFactory;

    protected $table = 'is_form_completeds';

    protected $fillable = [
        'personal_id',
        'is_form_completed',
        'dis_personal_id'
    ];

    public function personal()
    {
        return $this->hasOne(PersonalId::class, 'personal_id', 'personal_id');
    }
    public function dp01()
    {
        return $this->hasOne(Dp01::class, 'personal_id', 'personal_id');
    }
    public function dp11()
    {
        return $this->hasOne(Dp11::class, 'personal_id', 'personal_id');
    }
    public function dp02()
    {
        return $this->hasOne(Dp02::class, 'personal_id', 'personal_id');
    }
    public function dp09()
    {
        return $this->hasOne(Dp09::class, 'personal_id', 'personal_id');
    }

    public function personalb()
    {
        return $this->belongsTo(PersonalId::class,'personal_id','personal_id');
    }
}
