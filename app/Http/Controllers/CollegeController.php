<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\College;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollegeController extends Controller
{


    public function postStore(){
    	if(Request::ajax()){
    		$inputData = Input::all();
    		$hasExisting = College::where('name', $inputData['name'])->get();

    		if( count($hasExisting) < 1){
    			$newRecord = College::create( $inputData );
    			return $newRecord;
    		}else{
    			return 0;
    		}
    	}
    }

    public function getRecord( $id ){
        return College::find( $id );    
    }

    public function postUpdate( $id ){
        return College::where('id', $id)->update( Input::get('data') );
    }
    	
}
