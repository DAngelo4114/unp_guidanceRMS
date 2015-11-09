<?php

namespace App\Http\Controllers;

use App\AbsentRecord;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class AbsentRecordController extends Controller
{
    public function postStore(){
    	if(Request::ajax()){
    		$data = Input::get('data');
    		$i = 0;

    		foreach ($data as $key) {
    			AbsentRecord::create( $data[ $i ] );
    			$i++;

    			if( $i == count($data) ){
    				return "OK";
    			}
    		}
    	}
    }

    public function postDelete($id){
        return DB::table('absences_records')->where('id', $id)->delete();
    }


    public function postUpdate(){
        if(Request::ajax()){
            $data = Input::get('data');
            $i = 0;
            foreach ($data as $key) {
                DB::table('absences_records')->where('id', $data[ $i ]['id'])->update( $data[ $i ]);
                $i++;
                if($i == count($data)){
                    return "OK";
                }
            }
        }
    }


    public function getRecord( $id ){
        if(Request::ajax()){
            return  AbsentRecord::where('student_id', $id)->get();
        }
    }
}
