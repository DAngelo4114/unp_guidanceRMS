<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\Http\Requests;
use App\FamilyBackground;
use App\Http\Controllers\Controller;

class FamilyBackgroundController extends Controller
{
    public function postStore(){
    	if(Request::ajax()){
    		$i = Input::get('data');


    		return FamilyBackground::create($i);
    	}
    }

    public function postDelete($id){
        return DB::table('family_backgrounds')->where('id', $id)->delete();
    }


    public function postUpdate($id){
        if(Request::ajax()){
            return DB::table('family_backgrounds')->where('id', $id)->update( Input::get('data') );

        }
    }


    public function getRecord( $id ){
        if(Request::ajax()){
            return  FamilyBackground::where('student_id', $id)->get();
        }
    }
    	
}
