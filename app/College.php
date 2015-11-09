<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';
    protected $fillable = [
    	'name'
    ];

    public function student(){
    	return $this->hasMany('App\Student');
    }
    public function course(){
    	return $this->hasMany('App\Course');
    }
}
