<?php

use App\UserDetail;

class UserLoginController extends \BaseController {

	public function userLogin(){
		$email  = Input::get('email','qwerty');
		echo $email;
		// return $email;

		// $results = DB::select('select * from userDetails where email = ?', array($email));
		$results = DB::table('userDetails')->where('email', $email)->first();
		// return View::make('pages.moreInfo')->with('email');
		// return View::make('pages.moreInfo',compact('email'));
		// var_dump($results);
		// echo "echo $results";
		// print "print $results";
		// return View::make('pages.moreInfo')->with('results',$results);
		
		return View::make('pages.moreInfo',compact('results'));
		
		
	}

	public function userDetails(){
		// $users = UserDetail::all();
		
		DB::table('userDetails')->insert(array(
			'username'=>'jacksparrow',
			'password'=>'123456',
			'password' => Hash::make('secret'),
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
			'email'=>"abcd@gmail.com",
			'role'=>"Faculty"
		));


		$users = DB::table('userDetails')->get();
		return $users;
		// return View::make('pages.moreInfo');
	}


}
