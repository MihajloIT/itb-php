<?php

class Kvadrat 
{

    private $a;

    public function __construct($a)
    {
        $this -> setA($a);
    }
    public function setA($a)
    {
        $this -> a = ($a>0)? $a : 0;
    }
    public function getA()
    {
        return $this->a;
    }
    public function obimKvadrata()
    {
        $rez = $this->getA()*4;
        return $rez;
    }
    public function povrsinaKvadrata()
    {
        $rez = $this->getA()**2;
        return $rez;

    }
}
















?>