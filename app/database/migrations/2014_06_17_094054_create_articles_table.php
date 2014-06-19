<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {
    
    private $table = 'articles';
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
		    $table->string('article_number');
                    $table->string('brand');
		    $table->decimal('sales_price',10,2);
		    $table->integer('prefered_supplier_id');
		    $table->boolean('include_in_pow_calc');
		    $table->text('description');
		    $table->text('child_articles');
		    $table->text('properties');
		   
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
