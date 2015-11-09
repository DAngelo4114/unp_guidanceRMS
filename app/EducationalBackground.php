<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    protected $table = 'educational_backgrounds';
    protected $fillable = [
    	'student_id',
    	'level',
    	'school_name_address',
    	'degree',
    	'year_graduated',
    	'date_from',
    	'date_to',
    	'general_average',
    	'awards',
    ];
    
    // public function setDateFromAttribute($value){
    //     return $this->attributes['date_from'] = Carbon::parse( $value )->toDateString();
    // }

    // public function setDateToAttribute($value){
    //     return $this->attributes['date_to'] = Carbon::parse( $value )->toDateString();
    // }

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
