<?php
require_once "oblik.php";
class Kvadrat extends Oblik
{
    private $a;
    public const OBLIK = "Kvadrat";

    public function __construct($a)
    {
        $this -> setA($a);
    }
    public function setA($a)
    {
        $this -> a = $a;
    }
    public function getA()
    {
        return $this -> a;
    }

    public function obim()
    {
        return $this->getA()*4;
    }
    public function povrsina()
    {
        return $this->getA()**2;
    }

}
































?>