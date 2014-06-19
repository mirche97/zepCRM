<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	private $table = 'customers';

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
		    $table->integer('customer_type_id');
		    $table->string('VATnumber')->nullable();

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
