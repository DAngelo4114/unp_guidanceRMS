<?php

namespace App\Http\Controllers;


use Request;
use App\OrganizationalAffiliation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class OrganizationalAffiliationController extends Controller
{

    public function postStore(){
    	if(Request::ajax()){
    		$data = Input::get('data');
    		$i = 0;

    		foreach ($data as $key) {
    			OrganizationalAffiliation::create( $data[ $i ] );
    			$i++;
    			if( $i == count( $data )) {
    				return "OK";
    			}
    		}
    	}
    }

    public function postDelete($id){
        return DB::table('organizational_affiliations')->where('id', $id)->delete();
    }


    public function postUpdate(){
        if(Request::ajax()){
            $data = Input::get('data');
            $i = 0;
            foreach ($data as $key) {
                DB::table('organizational_affiliations')->where('id', $data[ $i ]['id'])->update( $data[ $i ]);
                $i++;
                if($i == count($data)){
                    return "OK";
                }
            }
        }
    }


    public function getRecord( $id ){
        if(Request::ajax()){
            return  OrganizationalAffiliation::where('student_id', $id)->get();
        }
    }
}
