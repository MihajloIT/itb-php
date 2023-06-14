<?php
require_once "oblik.php";

class Kvadrat extends Oblik
{

    private $a;

    public function __construct($a)
    {
        parent::__construct(Oblik::KVADRAT);
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
    public function obim()
    {
        return $this->getA()*4;        
    }
    public function povrsina()
    {
        return $this->getA()**2;       
    }

    // public function ispis()
    // {
    //     echo "<p>Kvadrat: obim {$this->obim()}, povrsina {$this->povrsina()}</p>";
    // } prisemo jer smo u konstruktoru povezali sa oblikom
}
















?>