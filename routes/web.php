<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Student route
Route::resource('students', 'StudentController');
//Class  route
Route::resource('classmodel', 'ClassModalController');
//Section route
Route::resource('section', 'SectionController');
//Van route
Route::resource('van', 'VanController');
//Parent route
Route::resource('parentmodel', 'ParentModelController');
//Sms Template route
Route::resource('sms_templates', 'SmsTemplateController');
//Teacher route
Route::resource('teachers', 'TeacherController');
//Member route
Route::resource('members', 'MemberController');
//Staff route
Route::resource('staffs', 'StaffController');

Route::group(['prefix' => 'send/sms/'], function () {
	Route::get('/selected', 'SmsIndexController@selectedIndex');
	Route::get('/students', 'SmsIndexController@studentIndex');
	Route::get('/teachers', 'SmsIndexController@teacherIndex');
	Route::get('/members', 'SmsIndexController@memberIndex');
	Route::get('/staffs', 'SmsIndexController@staffIndex');
	Route::get('/general', 'SmsIndexController@generalIndex');
	Route::post('/{type}', 'SmsController@sendSms');	
});

Route::group(['prefix' => 'report'], function () {
	Route::get('/student/single', 'ReportController@studentSingleIndex');
	Route::post('/student/single', 'ReportController@studentSingleReport');
	Route::get('/student/single/print/{student_id}/{start_date}/{end_date}', 'ReportController@studentSingleReportPrint');

	Route::get('/class-section', 'ReportController@classSectionIndex');
	Route::post('/class-section', 'ReportController@classSectionReport');
	Route::get('/class-section/print/{class_id}/{section_id}/{date}', 'ReportController@classSectionReportPrint');

	Route::get('/teacher/single', 'ReportController@teacherSingleIndex');
	Route::post('/teacher/single', 'ReportController@teacherSingleReport');
	Route::get('/teacher/single/print/{teacher_id}/{start_date}/{end_date}', 'ReportController@teacherSingleReportPrint');

	Route::get('/staff/single', 'ReportController@staffSingleIndex');
	Route::post('/staff/single', 'ReportController@staffSingleReport');
	Route::get('/staff/single/print/{staff_id}/{start_date}/{end_date}', 'ReportController@staffSingleReportPrint');

	Route::get('/sent-sms', 'ReportController@smsLogIndex');
	Route::post('/sent-sms', 'ReportController@smsLogReport');
	Route::get('/sent-sms/print/{start_date}/{end_date}', 'ReportController@smsLogReportPrint');

	Route::get('/metric_id/list', 'ReportController@metricIdList');

	Route::get('/student/present', 'ReportController@studentPresent');
	Route::get('/student/absent', 'ReportController@studentAbsent');

	Route::get('/teacher/present', 'ReportController@teacherPresent');
	Route::get('/teacher/absent', 'ReportController@teacherAbsent');

	Route::get('/staff/attendance/{type}', 'ReportController@currentDateStaffAttendance');

});

//User
Route::get('/users/manage-users', 'UserController@index');
Route::post('/users/store', 'UserController@store');
Route::post('/users/edit','UserController@edit');
Route::put('/users/{id}','UserController@update');
Route::delete('/users/{id}','UserController@destroy');