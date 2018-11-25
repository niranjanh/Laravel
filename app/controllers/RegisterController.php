<?php

use App\UserDetail;

class RegisterController extends BaseController {

	public function register(){
		return View::make('pages.register');
	}


	public function sendTheId()
	{
		return View::make('workInProgress');
	}

	public function addUser()
	{
		$email  = Input::get('email');
		// var_dump($email);
		// $email1  = Input::post('email');
		// var_dump($email1);
		
		$username  = Input::get('username');
		$role  = Input::get('role');
		

		DB::table('userDetails')->insert(array(
			'username'=>$username,
			'password'=>'123456',
			'password' => Hash::make('secret'),
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
			'email'=>$email,
			'role'=>$role
		));

		return View::make('success');
	}

	// public function __call($method, $parameters)
	// {
	// 	return $this->missingMethod($parameters);
	// }
}
