<?php

namespace App\Http\Controllers;

use Request;
use App\AcademicPerformance;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AcademicPerformanceController extends Controller
{
    public function postStore(){
    	if(Request::ajax()){
    		$data = Input::get('data');
    		$i = 0;

    		foreach ($data as $key) {
    			AcademicPerformance::create( $data[ $i ] );
    			$i++;
    			if( $i == count( $data )) {
    				return "OK";
    			}
    		}
    	}
    }

    public function postDelete($id){
        return DB::table('academic_performances')->where('id', $id)->delete();
    }


    public function postUpdate(){
        if(Request::ajax()){
            $data = Input::get('data');
            $i = 0;
            foreach ($data as $key) {
                DB::table('academic_performances')->where('id', $data[ $i ]['id'])->update( $data[ $i ]);
                $i++;
                if($i == count($data)){
                    return "OK";
                }
            }
        }
    }


    public function getRecord( $id ){
        if(Request::ajax()){
            return  AcademicPerformance::where('student_id', $id)->get();
        }
    }
}
