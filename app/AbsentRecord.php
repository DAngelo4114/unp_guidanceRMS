<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AbsentRecord extends Model
{
    protected $table = 'absences_records';
    protected $fillable = [
    	'student_id',
    	'year_level',
    	'absent_date',
    	'subject',
    	'reason'
    ];

    public function getAbsentDateAttribute($value){
        return Carbon::parse($value)->toFormattedDateString();
    }

    public function getSubjectAttribute($value){
        return ucfirst($value);
    }

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
