<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
    	'school_id',
    	'lname',
    	'fname',
    	'mname',
        'college_id',
        'course_id',
        'year_level',
        'section',
        'unp_cat_rating',
        'scholarship_id',
    	'birthdate',
    	'age',
    	'place_of_birth',
    	'citizenship',
    	'sex',
    	'civil_status',
    	'date_of_marriage',
    	'height',
    	'weight',
    	'bloodtype',
    	'contact_number',
    	'email',
        'religion',
        'illness',
        'disability',
        'ethnic',
    	'home_address',
        'present_addresses',
        'dorms',

    ];
    

    protected $casts =[
        'present_addresses' => 'array',
        'dorms' => 'array',
    ];

    

    public function getFnameAttribute($value){
        return ucfirst($value);
    }

    public function getMnameAttribute($value){
        return ucfirst($value);
    }

    public function getLnameAttribute($value){
        return ucfirst($value);
    }

    /********************************************/

    public function college() {
    	return $this->belongsTo('App\College');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }
        
    public function scholarship(){
        return $this->belongsTo('App\Scholarship');
    }

    public function educationalBackground(){
        return $this->hasMany('App\EducationalBackground');
    }

    public function familyBackground(){
        return $this->hasMany('App\FamilyBackground');
    }

    public function academicPerformance(){
        return $this->hasMany('App\academicPerformance');
    }

    public function organizationalAffiliation(){
        return $this->hasMany('App\OrganizationalAffiliation');
    }

    public function psychologicalTest(){
        return $this->hasMany('App\PsychologicalTest');
    }
        
    public function activityParticipated(){
        return $this->hasMany('App\Activity');
    }

    public function counsellingRecord(){
        return $this->hasMany('App\CounsellingRecord');
    }

    public function absentRecord(){
        return $this->hasMany('App\AbsentRecord');
    }

}
