<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Crypt;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function postStore(){
    	if(Request::ajax()){
    		$data = Input::get('data');
    		return User::create([
    			'role'=> $data['role'],
    			'username'=> $data['username'],
    			'password'=>bcrypt( $data['password'] ),
    		]);
    	}
    }
    public function getInfo($id){
       return User::select('username','role')->where('id', $id)->get();
    }

    public function postDelete($id){
        return User::where('id', $id)->delete();
    }

    public function postUpdate($id){
        return User::where('id',$id)->update(Input::all());
    }
}
