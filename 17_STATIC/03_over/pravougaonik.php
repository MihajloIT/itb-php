<?php
require_once "oblik.php";

class Pravougaonik extends Oblik
{

    private $a;
    private $b;
    
    public function __construct($a,$b)
    {
        parent::__construct(Oblik::PRAVOUGAONIK);
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

    
    public function obim()
    {
        $rez = $this->getA()*2 + $this->getB()*2;
        return $rez;
    }
    public function povrsina()
    {
        $rez = $this->getA()*$this->getB();
        return $rez;

    }

    // public function ispis()
    // {
    //     echo "<p>Pravougaonik: obim {$this->obim()}, povrsina {$this->povrsina()}</p>";
    // }
}




















?>