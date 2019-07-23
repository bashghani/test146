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

Route::get('/', function () {
    return view('front');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/accounts', function () {
    return view('accounts');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/airport', function () {
    return view('airport');
});




Route::auth();

Route::get('/home', 'HomeController@index');
//open routes starts

Route::any('/contact_admin', 'openController@contact_admin');
Route::any('/account_application', 'openController@account_application');
//open routes ends

//admin routes start
Route::group(['middleware' => ['auth', 'admin']], function () {
    // Route::auth();
    Route::get('/chkadmin', function () {
        echo "yes admin";die;

        return view('welcome');
    });


    Route::any('/makeusr', 'adminController@store');
    Route::any('/deleteuser', 'adminController@delete');
    Route::post('/edituser', 'adminController@editUser');

});


//admin routes end

//start emp routes
Route::group(['middleware' => ['auth', 'emp']], function () {
    // Route::auth();

    Route::get('protected', function () {
        return view('emptest');

//	 return view('empreg7');
    });
    Route::post('/add_news', 'empController@store_news');
    Route::any('/delete_news', 'empController@delete_news');
    Route::any('/delete_picture_cate', 'empController@delete_cate');
    Route::any('/edit_news', 'empController@edit_news');
    Route::any('/publication_home', 'empController@show_publications');
    Route::post('/add_publication', 'empController@add_publications');
    Route::post('/delete_publications', 'empController@delete_publications');
    Route::post('/edit_contact', 'empController@edit_contact');

    Route::post('/delete_contact_message', 'empController@delete_contact_message');






    Route::any('/manage_jobs', 'empController@manage_job');
    Route::any('/completed_jobs', 'empController@completed_jobs');
    Route::any('/cancelled_jobs', 'empController@cancelled_jobs');
    Route::any('/manage_categories', 'empController@manage_cate');
    Route::post('/add_category', 'empController@make_cate');
    Route::any('/delete_category', 'empController@delete_category');
    Route::get('/category-{catname}', 'empController@show_category');
    Route::post('/add_pictures_incategory', 'empController@store_picture_category');
    Route::get('/contactus_home', 'empController@contact_us_home');
    Route::get('/completed_messages', 'empController@contact_us_completed');
    Route::get('/cancelled_messages', 'empController@cancelled_messages');

    //accounts routes
    Route::get('/accounts_home', 'empController@accounts_home');
    Route::get('/completed_accounts', 'empController@accounts_completed');
    Route::get('/cancelled_accounts', 'empController@accounts_cancelled');

    Route::post('/delete_contact_message', 'empController@delete_account_application');
    Route::post('/edit_accounts_application', 'empController@edit_accounts_application');


});

//end emp routes
