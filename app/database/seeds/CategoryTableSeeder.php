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
class CategoryTableSeeder extends Seeder{
    
    private $table = 'categories';
    
    public function run()
    {
        
        $data = array(
            array('name' => 'Zonnepannen', 'cnt_steps'=>5),
            array('name' => 'Heatpipes', 'cnt_steps'=>4),
            array('name' => 'Zonneboilers', 'cnt_steps'=>5),
            array('name' => 'Combipanelen', 'cnt_steps'=>6),
            array('name' => 'Poly- en monopanelen', 'cnt_steps'=>5),
            array('name' => 'Opvulpanelen', 'cnt_steps'=>5),
            array('name' => 'Indakpanelen', 'cnt_steps'=>5),
            array('name' => 'Omvormers', 'cnt_steps'=>2),
            array('name' => 'Montagematerialen', 'cnt_steps'=>3),
                
        );
        
        DB::table($this->table)->delete();
        
        DB::table($this->table)->insert($data);

        
        
    }
}
