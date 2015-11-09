<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\Scholarship;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScholarshipController extends Controller
{
    public function postStore(){
    	if(Request::ajax()){
    		$inputData = Input::all();
    		$hasExisting = Scholarship::where('name', $inputData['name'])->get();

    		if( count($hasExisting) < 1){
    			$newRecord = Scholarship::create( $inputData );
    			return $newRecord;
    		}else{
    			return 0;
    		}
    	}
    }

    public function getRecord( $id ){
        return Scholarship::find( $id );    
    }

    public function postUpdate( $id ){
        return Scholarship::where('id', $id)->update( Input::get('data') );
    }
        
    	
}
