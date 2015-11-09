<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = [
    	'student_id',
    	'year_level',
    	'activity_date',
        'activity',
    	'sponsor',
    ];

    public function getActivityDateAttribute($value){
        return Carbon::parse( $value )->toFormattedDateString();
    }

    public function getActivityAttribute($value){
        return ucfirst($value);
    }

    public function getSponsor($value){
        return ucfirst($value);
    }

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
