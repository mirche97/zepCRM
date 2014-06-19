<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorystepArticlesTable extends Migration {
        private $table = 'categorystep_articles';
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
		    $table->integer('categorystep_id')->unsigned();
                    $table->integer('article_id')->unsigned(); 
		    $table->integer('min_items');
		    $table->integer('max_items');
                    
                    $table->timestamps();
		    
		});
                
                Schema::table($this->table, function($table)
                {       
                    $table->foreign('categorystep_id')->references('id')->on('categorysteps');
                    $table->foreign('article_id')->references('id')->on('articles'); 
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
