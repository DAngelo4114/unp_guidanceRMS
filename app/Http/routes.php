<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
	return redirect('auth/login');
});
Route::get('/home', function(){
	return redirect('admin/dashboard');
});

Route::post('checkSchoolID', 'PersonalInfoController@checkSchoolID');



Route::controller('user','UserController');

Route::controller('educational-background','EducationalBackgroundController');
Route::controller('scholarship','ScholarshipController');

Route::controller('course','CourseController');

Route::controller('college','CollegeController');
Route::controller('family-background','FamilyBackgroundController');
Route::controller('academic-performance','AcademicPerformanceController');
Route::controller('absent', 'AbsentRecordController');
Route::controller('counselling', 'CounsellingRecordController');
Route::controller('activity', 'ActivityParticipatedController');
Route::controller('psycho-test', 'PsychologicalTestController');
Route::controller('org-affiliation', 'OrganizationalAffiliationController');
Route::controller('ajax-source','AjaxSourceController');
Route::controller('personal-info','PersonalInfoController');
Route::controller('admin', 'AdminPageController');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');