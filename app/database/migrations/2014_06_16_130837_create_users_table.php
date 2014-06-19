<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	private $table = 'users';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create($this->table, function($table)
		{
		    $table->increments('id');
		    $table->string('username');
		    $table->string('email');
		    $table->string('password');
		    $table->string('remember_token');

		});


		$admin = array(
			'username' => 'mirjana@sommite.nl', 
		    'email'		=> 'mirjana@sommite.nl', 
		    'password'  => Hash::make('admin12345')
			);

		DB::table($this->table)->insert($admin);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop($this->table);
	}

}
