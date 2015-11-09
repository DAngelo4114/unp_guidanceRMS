<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicPerformance extends Model
{
    protected $table = 'academic_performances';
    protected $fillable = [
    	'student_id',
    	'year_level',
    	'semester',
    	'remark',
    	'subject'
    ];

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
