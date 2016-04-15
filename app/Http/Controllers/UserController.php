<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
	public function index($id){
		//echo $id;
		$users = DB::table('user')->select('name')->get();
		
		return view('user', ['users' => $users]);
	}

	public function login(){
		$phone    = Input::get('username');
		$password = Input::get('password');
		$_token = Input::get('_token');

		if ($_token == csrf_token()) {
			$results = DB::table('user')->where('phone', $phone)->first();

			if (!$results) {
				return view('login', ['users' => '账号密码不正确']);
			}

			if ($password == $results->password) {
				return view('user', ['users' => '登陆成功']);
			}else
				return view('login', ['users' => '账号密码不正确']);
		}else
			return view('login');
	}

	public function register(){
		$phone    = Input::get('username');
		$password = Input::get('password');
		$city    = Input::get('city');
		$age = Input::get('age');
		$_token = Input::get('_token');
		if ($_token == csrf_token()) {
			$users = DB::table('user')->where('phone', $phone)->first();
			if($users)
				return view('register', ['users' => '不要重复注册']);
			
			$results = DB::table('user')->insert(['phone' => $phone, 'password' => $password, 'city' => $city, 'age' => $age]);
			if(!$results){
				return view('register', ['users' => '提交失败，请重新提交']);
			}else
				return view('user', ['users' => '注册成功']);
		}
	}

	public function forgetpwd(){
		$phone    = Input::get('username');
		$password = Input::get('password');
		$_token = Input::get('_token');
		if ($_token == csrf_token()) {
			$users = DB::table('user')->where('phone', $phone)->first();
			if(!$users)
				return view('forget', ['users' => '手机用户不存在']);

			$results = DB::table('user')->where('phone', $phone)->update(['password' => $password]);
			if(!$results){
				return view('forget', ['users' => '修改失败，请重新提交']);
			}else
				return view('user', ['users' => '修改成功']);
		}else
			return view('login');
	}
}