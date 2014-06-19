<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

        private $table = 'categories';
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
		    $table->text('description')->nullable();
		    $table->integer('cnt_steps');
		    
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
