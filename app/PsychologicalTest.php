<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PsychologicalTest extends Model
{
	protected $table = 'psychological_tests';
	protected $dates = ['date_taken'];

    protected $fillable = [
    	'student_id',
        'name',
    	'date_taken',
    	'percentile',
    	'remarks'
    ];
    

    public function getDateTakenAttribute($value){
        return Carbon::parse($value)->toFormattedDateString();       
    }

    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function getRemarksAttribute($value){
        return ucfirst($value);
    }

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
