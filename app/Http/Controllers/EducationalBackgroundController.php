<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\EducationalBackground;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EducationalBackgroundController extends Controller
{
    public function postStore(){
    	if(Request::ajax()){
    		$data = Input::get('data');
    		$i = 0;

    		foreach ($data as $key => $value) {
    			EducationalBackground::create( $data[ $i ] );
    			$i++;

    			if( $i == count($data)){
    				return "OK";
    			}
    		}
    	}
    }

    public function postDelete($id){
        return DB::table('educational_backgrounds')->where('id', $id)->delete();
    }


    public function postUpdate(){
        if(Request::ajax()){
            $data = Input::get('data');
            $i = 0;
            foreach ($data as $key => $value) {
                return DB::table('educational_backgrounds')->where('id', $data[ $i ]['id'])->update( $data[ $i ] );
            }
            
            if($i == count( $data )){
                return "OK";
            }

        }
    }


    public function getRecord( $id ){
        if(Request::ajax()){
            return  EducationalBackground::where('student_id', $id)->get();
        }
    }
    	
}
