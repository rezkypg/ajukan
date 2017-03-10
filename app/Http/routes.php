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

Route::get('random', function () {
    return view('random');
});

Route::get('/getReq', function(){
	if(Request::ajax()){
		return 'get request loaded';
	}
});

Route::post('/register', function(){
	if(Request::ajax()){
		// return Response::json(Request::all());
		$input = Request::all();

		// print_r($input['fName']);
		if($input["fName"] == "john"){
			return Response::json("oke");
		}

		else return Response::json("not oke");
	}
});

Route::get('/', 'MainController@form');
Route::post('/submit-form',  'MainController@submit_form');
Route::get('form', 'MainController@form');
Route::get('admin-login', 'AdminController@login');
Route::post('admin-authenticate', 'AdminController@login_process');
Route::get('admin-dashboard', 'AdminController@dashboard');
Route::post('change-status', 'AdminController@change_status');
Route::post('user-detail', 'AdminController@user_detail');
Route::post('delete-user', 'AdminController@delete_user');
Route::get('logout', function(){
	Auth::logout();
    return redirect('admin-login');
});


