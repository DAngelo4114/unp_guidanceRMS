<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Course;
use App\College;
use App\Student;
use App\Scholarship;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxSourceController extends Controller
{
    public function getIndex(){
    	if(Request::ajax()){
    		$colleges = College::all();
    		$courses = Course::all();
    	    $scholarships = Scholarship::all();
    	    $students = Student::where('archived',0)->get();
    		return compact('colleges','courses','scholarships', 'students');
    	}
    }

    public function getStudent($id){
        if(Request::ajax()){
            $student = Student::with('college','course','scholarship','educationalBackground','familyBackground',
                'academicPerformance','organizationalAffiliation','psychologicalTest','activityParticipated',
                'counsellingRecord','absentRecord')->where('students.id', $id)->get();

            return $student;
        }
    }

    public function getStatistics(){
        if(Request::ajax()){
            $genderPerColleges = DB::table('vw_genderbycolleges')->get();
            $genderWhole = DB::table('vw_genderWhole')->get();
            $byStatus = DB::table('vw_byStatus')->get();
            $perCollege = DB::table('vw_percollege')->get();
            $perScholarship = DB::table('vw_perscholarship')->get();
            return compact('genderPerColleges', 'genderWhole','byStatus','perCollege','perScholarship');
        }
    }
    	
}
