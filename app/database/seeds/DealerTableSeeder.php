<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DealerTableSeeder
 *
 * @author Mirjana
 */
class DealerTableSeeder extends Seeder{
    
    private $table = 'dealers';
    
    public function run()
    {
        
        $data = array(
            array(
                'name'          => "ZepBV",
                'street'        => "Foksdiep",
                'housenumber'   => "9",
                'postal_code'   => "8321MK",
                'city'          => "Urk",
                'phonenumber1'  => "06 2356 8398",
                'email'         => "info@clc.nl"
            ),
            array(
                'name'          => "Sommité",
                'street'        => "Ijsledijk",
                'housenumber'   => "34",
                'postal_code'   => "8261LK",
                'city'          => "Kampen",
                'phonenumber1'  => "06 8397 5492",
                'email'         => "info@sommite.nl"
            ),
        );
        
        DB::table($this->table)->delete();
        
        DB::table($this->table)->insert($data);

        
        
    }
}
