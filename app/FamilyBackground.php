<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model
{
    protected $table = 'family_backgrounds';
    protected $fillable = [
    	'student_id',
    	'member',
        'others',
        'members',
    	'birth_order',
    	'number_of_brothers',
    	'number_of_sisters',
    	'parent_status',
    	'type_of_living',
    	'family_income'
    ];
    protected $casts = [
        'members' => 'array',
    ];
    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
