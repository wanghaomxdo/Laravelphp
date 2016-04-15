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
//登陆页面
Route::get('/', function () {
    return view('login');
});

Route::get('home',function(){
	return 'Hallo Word!';
});
//注册页面
Route::get('registerto',function(){
	return view('register');
});
//忘记密码页面
Route::get('forgetto',function(){
	return view('forget');
});

Route::get('user/{id}', 'UserController@index');
//登陆
Route::post('login','UserController@login');
//注册
Route::post('register','UserController@register');
//找回密码
Route::post('forgetpwd','UserController@forgetpwd');