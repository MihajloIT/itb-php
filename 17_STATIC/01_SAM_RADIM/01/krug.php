<?php


class Krug
{
    private $r;
    private const PI=3.14;


    public function __construct($r)
    {
        $this -> setR($r);
    }
    public function setR($r)
    {
        $this -> r = ($r>=0)? $r : "Greska";
    }
    public function getR()
    {
        return $this -> r;
    }

    public function obimKruga()
    {
        return 2*$this->getR()*self::PI;
    }
    public function povrsinaKruga()
    {
        return $this->getR()**2*self::PI;
    }
}


$k1 = new Krug(5);
echo $k1->obimKruga() . "<br>";
echo $k1 -> povrsinaKruga();



































?>