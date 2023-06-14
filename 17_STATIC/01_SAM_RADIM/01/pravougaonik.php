<?php



class Pravougaonik
{
    private $a;
    private $b;
    public const OBLIK = "Pravougaonik";

    public function __construct($a,$b)
    {
        $this -> setA($a);
        $this -> setB($b);
    }
    public function setA($a)
    {
        $this -> a = $a;
    }
    public function setB($b)
    {
        $this -> b = $b;
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
        return ($this->getA()+$this->getB())*2;
    }
    public function povrsina()
    {
        return $this->getA()*$this->getB();
    }

}









?>