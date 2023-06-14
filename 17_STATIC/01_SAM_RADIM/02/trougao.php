<?php

require_once "oblik.php";
class Trougao extends Oblik
{
    private $a;
    private $b;
    private $c;
    public const OBLIK = "Trougao";

    private function uslov($a,$b,$c)
    {
        if($a > 0 && $b > 0 && $c > 0 && $a+$b > $c && $a+$c > $b && $c+$b > $a)
        {
            return true;
        }else
        {
            return false;
        }
    }

    public function __construct($a,$b,$c)
    {
        if(self::uslov($a,$b,$c))
        {
            $this -> a = $a;
            $this -> b = $b;
            $this -> c = $c;
        }else
        {
            echo "Pogresno uneta polja trougla<br>";
        }
    }

    public function setA($a)
    {
        if(self::uslov($a,$this->b,$this->c))
        {
        $this -> a = $a;
        }
    }
    public function setB($b)
    {
        if(self::uslov($this->a,$b,$this->c))
        {
        $this -> b = $b;
        }
    }
    public function setC($c)
    {
        if(self::uslov($this->a,$this->b,$c))
        {
        $this -> c = $c;
        }
    }

    public function getA()
    {
        return $this -> a;
    }
    public function getB()
    {
        return $this -> b;
    }
    public function getC()
    {
        return $this -> c;
    }

    public function obim()
    {
        return $this->getA()+$this->getB()+$this->getC();
    }

    public function povrsina()
    {
        $a = $this -> getA();
        $b = $this -> getB();
        $c = $this -> getC();
        $s = ($a + $b + $c)/2;
        $kon = sqrt($s*($s-$a)*($s-$b)*($s-$c));
        return $kon;
    }

    public function ispisiPovrsinu()
    {
        echo  "<p style='color:blue'>Povrsina je : " .$this->povrsina() ."</p>";
    }
}



































?>