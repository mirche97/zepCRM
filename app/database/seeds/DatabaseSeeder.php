<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('DealerTableSeeder');
                 $this->command->info('Dealer table seeded!');
                 
                 $this->call('CategoryTableSeeder');
                 $this->command->info('Category table seeded!');
                 
                 $this->call('CategorystepTableSeeder');
                 $this->command->info('Categorystep table seeded!');
                 
                 $this->call('ArticleTableSeeder');
                 $this->command->info('Article table seeded!');
	}

}
