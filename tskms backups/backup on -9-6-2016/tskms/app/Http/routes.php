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
	Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('view:clear');
	echo "done";die;
    // return what you want
});
	 Route::get('/jq', function () {
        return view('welcomejq1');
    });
	 Route::any('/testjq', 'testPurpose@seeinp');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
	Route::group(['middleware' => ['auth', 'admin']], function () {
  // Route::auth();
  
  
    Route::any('/deleteuser', 'adminController@delete');
	Route::any('/ch_admin_pswd', 'adminController@ch_psw_admin');
	Route::any('/leave_mgt_admin_vw', 'adminController@leave_mg_vw');
	Route::any('/ch_pswd_admin_vw', 'adminController@ch_psw_admin_vw');
  Route::any('/makeusr', 'adminController@store');
  Route::any('/edituser', 'adminController@editUser');
   Route::any('serc', 'adminController@seruser');
    Route::any('serc_for_points', 'adminController@seruser_for_points');
   Route::any('/pointsys_admin', 'adminController@ad_points');
   Route::any('/advwdetails', 'adminController@ad_tm_points');
   Route::any('/toaddash', 'adminController@toadmdash');
    Route::any('/all_leave_app_admin', 'adminController@all_leave_app');
	Route::any('/cancelled_leave_app_admin', 'adminController@cancelled_leave_app');
	Route::any('/approved_leave_app_admin', 'adminController@approved_leave_app');
	Route::any('/pending_leave_app_admin', 'adminController@pending_leave_app');
	Route::any('/view_report_admin', 'adminController@view_report_leave_admin');
	Route::any('/leave_datefilter_admin', 'adminController@leave_datefilters_admin');
   Route::post('/admindatefilter', 'adminController@ad_date_filter');
   Route::any('/admin_manage_leave', 'adminController@leave_mangement_admin');
   Route::any('/admin_short_lv_mgt_vw', 'adminController@admin_short_leave_vw');
   Route::any('/admin_mang_sh_leave', 'adminController@mang_sh_leave_admin');
   Route::any('/admin_all_sh_leave_app', 'adminController@admin_all_sh_leave');
   Route::any('/cancelled_sh_leave_app_admin', 'adminController@can_sh_leave_admin');
   Route::any('/admin_approved_sh_leave_app', 'adminController@appvd_sh_leave_admin');
   Route::any('/admin_pending_sh_leave_app', 'adminController@pending_sh_leave_admin');
   Route::any('/admin_sh_leave_datefilter', 'adminController@ad_sh_leave_datefilters');
   Route::any('/admin_view_sh_report', 'adminController@admin_view_report_sh_leave');

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
Route::any('/editproject', 'projectController@edit_proj');
Route::any('serc_for_points_pm', 'projectController@seruser_for_points_pm');
Route::any('/ch_pswd_pmanager_vw', 'projectController@ch_psw_pmanager_vw');
Route::any('/pointsys_apmanager', 'projectController@pmanager_points');
Route::any('/ch_pmanager_pswd', 'projectController@ch_psw_pmanager');
Route::post('/pmanagerdatefilter', 'projectController@pm_date_filter');
Route::any('/allprojects', 'projectController@allprojects');
Route::any('/cancelled_projects', 'projectController@cancelled_projects');
Route::any('/completed_projects', 'projectController@completed_projects');
Route::any('/active_projects', 'projectController@active_projects');
Route::any('/overdue_projects', 'projectController@overdue_projects_show');
Route::any('/pmvwdetails', 'projectController@pmanager_tm_points');
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
Route::any('/overdue_tasks', 'tlController@show_overdue_tasks');
//Route::any('/make_team', 'tlController@showTeam');
//Route::any('/assign_team', 'tlController@makeTeam');
Route::any('/make_team', 'tlController@team_action_do');
Route::any('/add_mem', 'tlController@add_team_members');
Route::any('/totlsdash', 'tlController@tomaindash');
Route::any('/ch_pswd_teamlead_vw', 'tlController@ch_psw_teamlead_vw');
Route::any('/delete_member', 'tlController@del_member');
Route::any('/ch_teamlead_pswd', 'tlController@ch_psw_teamlead');
Route::any('/leave_mgt_vw', 'tlController@leave_mang_vw');
Route::any('/short_lv_mgt_vw', 'tlController@short_leave_vw');
Route::any('/all_leave_app_tl', 'tlController@all_leave_tl');
Route::any('/cancelled_leave_app_tl', 'tlController@cancel_leave_tl');
Route::any('/approved_leave_app_tl', 'tlController@approved_leave_tl');
Route::any('/leave_datefilter', 'tlController@leave_datefilters');
Route::any('/sh_leave_datefilter', 'tlController@sh_leave_datefilters');
Route::any('/pending_leave_app_tl', 'tlController@pending_leave_tl');
Route::any('/view_report', 'tlController@view_report_leave');
Route::any('/view_sh_report', 'tlController@view_report_sh_leave');
Route::any('/tl_mang_sh_leave', 'tlController@mang_sh_leave');
Route::any('/tl_manage_leave', 'tlController@leave_mangement');
Route::any('/all_sh_leave_app', 'tlController@all_sh_leave');
Route::any('/cancelled_sh_leave_app', 'tlController@can_sh_leave');
Route::any('/approved_sh_leave_app', 'tlController@appvd_sh_leave');
Route::any('/pending_sh_leave_app', 'tlController@pending_sh_leave');
Route::any('/app_leave_tl', 'tlController@apply_leave_tl'); 
Route::any('/apply_leave_application_tl_vw', 'tlController@leave_show_vw_tl');
Route::any('/tl_apply_edit_leave', 'tlController@edit_apply_leave');
Route::any('/applied_all_leave_app_tl', 'tlController@applied_all_leave_tl');
Route::any('/applied_cancelled_leave_app_tl', 'tlController@applied_cancelled_leave_tl');
Route::any('/applied_approved_leave_app_tl', 'tlController@applied_approved_leave_tl'); 
Route::any('/applied_pending_leave_app_tl', 'tlController@applied_pending_leave_tl'); 
Route::any('/apply_short_leave_tl_vw', 'tlController@tl_apply_short_leave_vw'); 
Route::any('/tl_apply_short_leave', 'tlController@tl_apply_short_leave');
Route::any('/all_applied_tl_sh_leave_app', 'tlController@all_sh_leave_applied_tl'); 
Route::any('/cancelled_applied_tl_sh_leave_app', 'tlController@cancelled_sh_leave_mem_applied_tl'); 
Route::any('/approved_applied_tl_sh_leave_app', 'tlController@approved_sh_leave_applied_tl');
Route::any('/pending_applied_tl_sh_leave_app', 'tlController@pending_sh_leave_applied_tl');
Route::any('/tl_apply_edit_sh_leave', 'tlController@tl_apply_edit_sh_leave');
Route::any('/view_to_dos_tl', 'tlController@view_to_dos_tl');
 



});//end tl middleware
Route::group(['middleware' => ['auth', 'team_mem']], function () {
  // Route::auth();
  
Route::any('/ch_pswd_team_mem_vw', 'teamMemController@ch_psw_team_mem_vw'); 
Route::any('/ch_team_mem_pswd', 'teamMemController@ch_psw_team_mem');
// Route::any('/comp_task', 'tlController@comp_task_status');
//Route::get('/comp_task', 'HomeController@notelig');
Route::any('/alltasks_mem', 'teamMemController@alltasks_mem');
Route::any('/cancelled_tasks_mem', 'teamMemController@show_canceled_task_mem');
Route::any('/completed_tasks_mem', 'teamMemController@show_completed_task_mem');
Route::any('/active_tasks_mem', 'teamMemController@show_current_task_mem');
Route::any('/leave_application', 'teamMemController@leave_show_vw'); 
Route::any('/tm_apply_leave', 'teamMemController@apply_leave'); 
Route::any('/tm_apply_short_leave', 'teamMemController@apply_short_leave'); 
Route::any('/tm_edit_leave', 'teamMemController@edit_leave');
Route::any('/all_leave_app', 'teamMemController@all_leave_mem');   
Route::any('/cancelled_leave_app', 'teamMemController@cancelled_leave_mem'); 
Route::any('/approved_leave_app', 'teamMemController@approved_leave_mem');   
Route::any('/pending_leave_app', 'teamMemController@pending_leave_mem');
Route::any('/all_tm_sh_leave_app', 'teamMemController@all_sh_leave_mem');
Route::any('/cancelled_tm_sh_leave_app', 'teamMemController@cancelled_sh_leave_mem');
Route::any('/approved_tm_sh_leave_app', 'teamMemController@approved_sh_leave_mem');
Route::any('/pending_tm_sh_leave_app', 'teamMemController@pending_sh_leave_mem');
Route::any('/short_leave_tm', 'teamMemController@tm_short_leave_vw');  
Route::any('/view_to_dos_tm', 'teamMemController@to_do_task_view'); 
Route::any('/make_todo_tm', 'teamMemController@make_todo_task'); 
Route::any('/edit_todo_status', 'teamMemController@edit_todo_status');
Route::any('/all_todo_tm', 'teamMemController@all_todo_teammem'); 
Route::any('/cancelled_todo_tm', 'teamMemController@cancelled_todo_teammem'); 
Route::any('/completed_todo_tm', 'teamMemController@completed_todo_teammem'); 
Route::any('/active_todo_tm', 'teamMemController@active_todo_teammem');
Route::any('/start_timer_task', 'teamMemController@start_task_timer');
Route::any('/stop_timer_task', 'teamMemController@stop_task_timer');


Route::any('/tm_edit_sh_leave', 'teamMemController@edit_sh_leave');
Route::any('/overdue_tasks_tm', 'teamMemController@show_overdue_tasks_tm');   
Route::get('/team_mem', function () {
  return view('teammem_test');
  
//	 return view('empreg7');
});

});//end teammember middleware

});
