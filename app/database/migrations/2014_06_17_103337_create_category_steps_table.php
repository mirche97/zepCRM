<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryStepsTable extends Migration {

        private $table = 'categorysteps';
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
		    $table->integer('category_id')->unsigned();                     
		    $table->text('description');
		    $table->integer('step');
                    $table->string('action');  // controller action that needs to be triggered at this step
		    
                    $table->timestamps();
		});
                
                
                Schema::table($this->table, function($table)
                {       
                    $table->foreign('category_id')->references('id')->on('categories');    
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
