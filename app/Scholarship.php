<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $table = 'scholarships';
    protected $fillable = [
    	'name'
    ];

    public function student(){
    	return $this->hasMany('App\Student');
    }
    	
}
