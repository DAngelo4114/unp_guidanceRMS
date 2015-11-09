<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){
    	return true;
    }
    public function postStore(){
    	if(Request::ajax()){
    		$inputData = Input::all();
    		$hasExisting = Course::where('name', $inputData['name'])->get();

    		if( count($hasExisting) < 1){
    			$newRecord = Course::create( $inputData );
    			return $newRecord;
    		}else{
    			return 0;
    		}
    	}
    }

    public function getRecord( $id ){
        return Course::with('college')->find( $id );    
    }

    public function postUpdate( $id ){
        return Course::where('id', $id )->update( Input::get('data') );
    }
    	
}
