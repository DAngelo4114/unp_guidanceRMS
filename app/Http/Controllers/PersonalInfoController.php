<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\Course;
use App\College;
use App\Student;
use App\Scholarship;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonalInfoController extends Controller
{
    public function __constructor(){
        #$this->middleware('auth');
    }
    public function getIndex(){
    	return 'h';
    }

    public function postCheckSchoolID(){
        if(Request::ajax()){
   
            $hasExisting = Student::where('school_id', Input::get('school_id'))->get();
            if( count($hasExisting) >0){
                return 1;
            }else{
                return 0;
            }
        }
    }
        
    public function postTest(){
         if(Request::ajax()){
   
            $hasExisting = Student::where('school_id', Input::get('school_id'))->get();
            if( count($hasExisting) >0){
                return 1;
            }else{
                return 0;
            }
        }
    }
    public function postStore(){
        $last = Student::create(Input::all());
        return $last->id;    	
    }

    public function getRecord( $id ){
        if(Request::ajax()){
            return Student::with('college')->where('id', $id)->first();
        }
    }

    public function postUpdate( $id ){
        //return Input::get('data');
        return Student::where('id', $id)->update( Input::all() );
    }
    	
}
