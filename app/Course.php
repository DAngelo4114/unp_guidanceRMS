<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
    	'college_id',
    	'name'
    ];

    public function college(){
    	return $this->belongsTo('App\College');
    }

    public function student(){
    	return $this->hasMany('App\Course');
    }
}
