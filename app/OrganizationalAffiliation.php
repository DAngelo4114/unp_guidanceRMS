<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationalAffiliation extends Model
{
	protected $table = 'organizational_affiliations';
   	protected $fillable = [
    	'student_id',
    	'year_level',
    	'name',
    	'position',
    	'school_year'
    ];

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
