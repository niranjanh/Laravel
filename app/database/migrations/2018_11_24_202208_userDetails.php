<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userDetails',function($table)
		{
			$table->increments('id'); //Autoincremented primary key
			$table->string('username');
			$table->string('password'); //string == varchar
			$table->text('email');    //text == varchar2
			$table->string('role');
			$table->timestamps();  //has both craeted and updated values
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
