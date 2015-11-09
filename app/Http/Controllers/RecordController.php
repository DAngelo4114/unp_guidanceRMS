<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecordController extends Controller
{
    public function addRecord(){
    	return view('admin.addRecord');
    }
}
