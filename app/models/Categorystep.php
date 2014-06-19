<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorystep
 *
 * @author Mirjana
 */
class Categorystep extends Eloquent
{
      
    //relations
    
    public function category(){
        
        return $this->belongsTo('Category');
    }
    
    public function articles(){
        
        return $this->belongsToMany('Article')->withPivot('min_items','max_items');
    }
    
    
}
