<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use App\College;
use App\Student;
use App\Scholarship;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminPageController extends Controller
{
    public function __construct(){
        #dd(1);
        if(is_null(Session::get('logged_in'))){
            redirect('auth/login');
        }

        $this->middleware('auth');
     
    }

    public function getDashboard(){
    	return view('admin.index');
    }

    public function getAddRecord(){
    	return view('admin.addRecord');
    }
    
    public function getAddPersonalInformation(){
    	return view('admin.personalInformation');
    }

    public function getAddEducationalBackground(){
    	return view('admin.educationalBackground');
    }

    public function getAddFamilyBackground(){
    	return view('admin.familyBackground');
    }

    public function getAddAcademicPerformance(){
    	return view('admin.academicPerformance');
    }

    public function getAddOrganizationalAffiliation(){
    	return view('admin.organizationalAffiliation');
    }

    public function getAddPsychologicalTest(){
    	return view('admin.psychologicalTest');
    }

    public function getAddActivitiesParticipated(){
    	return view('admin.activitiesParticipated');
    }

    public function getAddCounsellingRecord(){
    	return view('admin.counselling');
    }

    public function getAddAbsencesRecord(){
    	return view('admin.absences');
    }

    public function getStudentRecords(){
        $students = Student::with('college')->orderBy('students.lname','ASC')->where('archived', 0)->get();
        return view('admin.studentRecords', compact('students'));
    }
    
    public function getColleges(){
        $colleges = College::all();
        return view('admin.collegesList', compact('colleges'));
    }

    public function getCourses(){
        $courses = Course::with('college')->get();
        return view('admin.coursesList', compact('courses'));
    }

    public function getScholarships(){
        $scholarships = Scholarship::all();
        return view('admin.scholarshipsList', compact('scholarships'));
    }

    public function getStatistics(){
        return view('admin.statistics');
    }

    public function getArchives(){
        $students = Student::with('college')->orderBy('students.lname','ASC')->where('archived', 1)->get();
        return view('admin.archives', compact('students'));
    }

    public function getUsers(){
        $users = User::where('id','!=', Auth::user()->id)->get();
        return view('admin.usersList', compact('users'));
    }
    public function getShow($t){
    	return $t;
    }
}
