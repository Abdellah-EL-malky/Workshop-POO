<?php

class cars {

    // atrributes (is like the sources that we're going to use)

    private $brand;
    private $color;

    // methods
    // the first step is to use the constructor (by default is already there but we shoud intialize it first)
    // we should add some parameters on the function of the constructor 

    public function __construct($brand = null , $color = null){

        // the first brand should be as same as the assigned variable (private $brand);
        // but the the last brand you can name whatever you want it's just a variable 
        $this -> brand = $brand;

        $this -> color = $color;

    }

}




?>