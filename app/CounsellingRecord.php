<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CounsellingRecord extends Model
{
    protected $table = 'counselling_records';
    protected $fillable = [
    	'student_id',
    	'year_level',
    	'date',
    	'problem',
    	'action'
    ];

    public function getDateAttribute($value){
        return Carbon::parse( $value )->toFormattedDateString();
    }

    public function getProblemAttribute($value){
        return ucfirst($value);
    }

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
