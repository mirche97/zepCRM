<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleTableSeeder
 *
 * @author Mirjana
 */
class ArticleTableSeeder extends Seeder{
    
    private $table = 'articles';
    
    public function run()
    {
        
        $data = array(
            // zonnepanelen
            array(
            'article_number'=>"1802", 'brand' =>"Daxx", 'description'=>"Zonnepaneel 240W poly blauw", 'sales_price' => "204.60",
            'properties' => json_encode(array("piek vermogen"=>"240"))
            ), 
            array(
            'article_number'=>"1805", 'brand' =>"Daxx", 'description'=>"Zonnepaneel 265W zwart mono", 'sales_price' => "295.74",
            'properties' => json_encode(array("piek vermogen"=>"265"))
            ),
            array(
            'article_number'=>"1808", 'brand' =>"Daxx", 'description'=>"Combi-paneel 250Wp zwart mono", 'sales_price' => "506.46",
            'properties' => json_encode(array("piek vermogen"=>"250"))
            ),
            array(
            'article_number'=>"1817", 'brand' =>"Daxx", 'description'=>"Zonnepaneel 250Wp zwart mono", 'sales_price' => "279.00",
            'properties' => json_encode(array("piek vermogen"=>"250"))
            ),
		    
            // omvormers
            array(
            'article_number'=>"2499", 'brand' =>"Samil power", 'description'=>"SR1100 omvormer", 'sales_price' => "565.75",
            'properties' => json_encode(array("leeg"=>""))
            ),
            array(
            'article_number'=>"2506", 'brand' =>"Samil power", 'description'=>"SR5200 omvormer", 'sales_price' => "1240.00",
            'properties' => json_encode(array("leeg"=>""))
            ),
            array(
            'article_number'=>"2509", 'brand' =>"Samil power", 'description'=>"SR5200+wifi omvormer", 'sales_price' => "1581.00",
            'properties' => json_encode(array("leeg"=>""))
            ),
         
            // montage material
            array(
            'article_number'=>"3500", 'brand' =>"3500", 'description'=>"PDA 1 Driehoeksteun ALU 35", 'sales_price' => "18.60",
            'properties' => json_encode(array("daktype"=>"plat dak"))
            ),
            array(
            'article_number'=>"3505", 'brand' =>"3505", 'description'=>"PDA 3 Driehoeksteun ALU 10", 'sales_price' => "18.60",
            'properties' => json_encode(array("daktype"=>"plat dak"))
            ),
            array(
            'article_number'=>"3520", 'brand' =>"", 'description'=>"Module klem+bout zwart", 'sales_price' => "1.16",
            'properties' => json_encode(array("daktype"=>"plat dak"))
            ),
            array(
            'article_number'=>"3532", 'brand' =>"", 'description'=>"Eindklem met bout alu 40mm", 'sales_price' => "1.32",
            'properties' => json_encode(array("daktype"=>""))
            ),
            array(
            'article_number'=>"3560", 'brand' =>"", 'description'=>"Stokschroef M10*200mm", 'sales_price' => "4.22",
            'properties' => json_encode(array("daktype"=>"pannendak"))
            ),
            array(
            'article_number'=>"3600", 'brand' =>"", 'description'=>"SDA 5 Rail ALU 2mtr", 'sales_price' => "10.08",
            'properties' => json_encode(array("daktype"=>"<>plat dak"))
            ),
            array(
            'article_number'=>"3640", 'brand' =>"", 'description'=>"SDA 7 Moduleklem met wyber alu", 'sales_price' => "1.55",
            'properties' => json_encode(array("daktype"=>"alle"))
            ),
        );
        
        DB::table($this->table)->delete();
        
        DB::table($this->table)->insert($data);

        
        
    }
}
