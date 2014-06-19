<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryTableSeeder
 *
 * @author Mirjana
 */
class CategorystepTableSeeder extends Seeder{
    
    private $table = 'categorysteps';
    
    public function run()
    {
        
        DB::table($this->table)->delete();
         
       
        
        foreach ( Category::all() as $cat){
            for ($i=1; $i<=$cat->cnt_steps; $i++ ){
                
               $step = new Categorystep(array(
                   'description' => $cat->name.' - stap '.$i,
                   'step' => $i                  
               ));
               
               $cat->steps()->save($step);
                       
            }
        }
      
    }
}
