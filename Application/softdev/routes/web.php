<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/index', 'customController@index');
Route::get('/about', 'customController@about');
Route::get('/blog', 'customController@blog');
Route::get('/contact', 'customController@contact');
Route::get('/portfolio', 'customController@portfolio');
Route::get('/request_food', 'customController@request_food');
Route::get('/request_utensils', 'customController@request_utensils');
Route::get('/search_alternatives', 'customController@search_alternatives');
Route::get('/search_procedures', 'customController@search_procedures');
Route::get('/firstProcedure', 'customController@firstProcedure');
Route::get('/secondProcedure', 'customController@secondProcedure');
Route::get('/thirdProcedure', 'customController@thirdProcedure');


Route::get('/requestForm', 'foodrequests@create');
Route::get('/viewRequest', 'foodrequests@index');
Route::get('/requestFormForUtensils', 'UtensilRequestsController@create');

Route::get('/accessMap','AccessMapController@index');
Route::get('/accessMapForUtensils','AccessMapController@accessUtensils');


Route::post('/insert','foodrequests@store');
Route::post('store','UtensilRequestsController@store');



Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('searchalternative','SearchAlternativeController');  
});


Route::group(['middleware' => ['web']], function() {
  Route::resource('viewrequest','ViewRequestController');  
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('viewrequestforutensils','ViewRequestForUtensils');  
});



Route::resource('/agegroups','AgegroupsController');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
