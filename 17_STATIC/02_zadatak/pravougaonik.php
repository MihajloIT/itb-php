<?php

class Pravougaonik
{

    private $a;
    private $b;
    
    public function __construct($a,$b)
    {
        $this -> setA($a);
        $this -> setB($b);
    }

    public function setA($a)
    {        
         $this -> a = ($a > 0)? $a : 0;       
    }
    public function setB($b)
    {               
        $this -> b = ($b>0)? $b : 0;
    }
    public function getA()
    {
        return $this -> a;
    }
    public function getB()
    {
        return $this -> b;
    }

    
    public function obimPravougaonika()
    {
        $rez = $this->getA()*2 + $this->getB()*2;
        return $rez;
    }
    public function povrsinaPravougaonika()
    {
        $rez = $this->getA()*$this->getB();
        return $rez;

    }
}




















?>