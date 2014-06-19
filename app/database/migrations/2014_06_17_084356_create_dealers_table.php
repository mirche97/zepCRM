<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration {

	private $table = 'dealers';
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
		    $table->string('name');
		    $table->string('street');
		    $table->string('housenumber');
		    $table->string('postal_code');
		    $table->string('city');
		    $table->string('phonenumber1');
		    $table->string('phonenumber2')->nullable();
		    $table->string('email');
		    $table->string('VATnumber');
		    $table->integer('margin');

		    $table->timestamps();

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
		Schema::drop($this->table);
	}


}
