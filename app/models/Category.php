<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Mirjana
 */
class Category extends Eloquent
{
    //put your code here
    protected $guarded = array('*');
    
    // relations
    public function steps(){
        return $this->hasMany('Categorystep');
    }
    
}
