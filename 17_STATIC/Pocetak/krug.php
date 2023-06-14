<?php

class Krug
{

    private $r;
    const PI = 3.14;
    const JA = "Hello World";
    // public static $pi = self::PI;
    private static $pi = self::PI;
    private static $br_decimala = 20;

    private static $brojKrugova = 0;

    public function __construct($r)
    {
        self::$brojKrugova++;
        $this -> setR($r);
    }

    public function setR($r)
    {
        if($r < 0)
        {
            $r = 0;
        }
        $this -> r = $r;
    }
    public function getR()
    {
        return $this -> r;
    }

    public function obimKruga()
    {
        $rez = 2*($this->getR())*self::$pi;
        return round($rez,self::$br_decimala);
    }
    public function povrsinaKruga()
    {
        $rez = ($this->getR()**2)*self::$pi;
        return round($rez, self::$br_decimala);
    }

    public static function setPi($vr)
    {
        self::$pi = $vr;
    }
    public static function getPi()
    {
        return self::$pi;
    }
    public static function setBrDecimala($br)
    {
        self::$br_decimala = $br;
    }
    public static function getBrDecimala()
    {
        return self::$br_decimala;
    }

    public static function brKrugova()
    {
        return self::$brojKrugova;
    }

}


























?>