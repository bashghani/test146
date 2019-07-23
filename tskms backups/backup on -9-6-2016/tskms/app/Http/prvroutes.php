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
 Route::any('/whrbtwn', 'tesdbController@serdb');
Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome1');
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
	Route::group(['middleware' => ['auth', 'admin']], function () {
  // Route::auth();
  
    Route::any('/deleteuser', 'adminController@delete');
  Route::any('/makeusr', 'adminController@store');
  Route::any('/edituser', 'adminController@editUser');
   Route::any('serc', 'adminController@seruser');

    Route::get('adminprotected', function () {
  return view('admintest');
  
//	 return view('empreg7');
});

});//end admin middleware


Route::group(['middleware' => ['auth', 'projmgr']], function () {
  // Route::auth();
   // Route::any('serc', 'jobseekController@serorder');
    Route::get('pmprotected', function () {
  return view('pmhome');
  
//	 return view('empreg7');
});
Route::any('/makeproject', 'projectController@store');
Route::any('sercProj', 'projectController@ser_proj');
Route::any('editproject', 'projectController@edit_proj');
 Route::any('/deleteproject', 'projectController@delete');
});//end pm middleware
Route::group(['middleware' => ['auth', 'teamlead']], function () {
  // Route::auth();
  
       Route::get('teamleadprotected', function () {
  return view('tltest');
  
//	 return view('empreg7');
});
Route::any('/maketask', 'tlController@store');
Route::any('/pointsys', 'tlController@points');
Route::post('/updstatus', 'tlController@upd_point_status');
Route::any('/vwdetails', 'tlController@tm_points');
Route::post('/datefilter', 'tlController@date_filter');
Route::post('/comp_task', 'tlController@comp_task_status');
Route::get('/comp_task', 'HomeController@notelig');
Route::any('/alltasks', 'tlController@alltasks');
Route::any('/cancelled_tasks', 'tlController@show_canceled_task');
Route::any('/completed_tasks', 'tlController@show_completed_task');
Route::any('/active_tasks', 'tlController@show_current_task');



});//end tl middleware
});
