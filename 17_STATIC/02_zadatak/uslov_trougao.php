<?php

class Trougao 
{
    private $a;
    private $b;
    private $c;

    private static function uslovZaTrougao($a,$b,$c)
    {
        return ($a>0 && $b>0 && $c>0 && $a+$b > $c && $a + $c > $b && $b + $c >$a);        
    }

    public function __construct($a,$b,$c)
    {
        if(self::uslovZaTrougao($a,$b,$c))
        {
        $this -> setA($a);
        $this -> setB($b);
        $this -> setC($c);
        }else
        {
            $this->a = 0;
            $this ->b = 0;
            $this ->c = 0;
        }
    }

    public function setA($a)
    {     
        if(self::uslovZaTrougao($a,$this->b,$this->c)) 
        {   
        $this -> a = $a;       
        }else
        {
            $this->a =0;
            $this->b =0;
            $this ->c = 0; // ovo je jedan nacin ako uslov nije ispunjen, moze i da se ignorise pa da ostane objekat onakav kakav je bio pre promene.
        }
    }
    public function setB($b)
    {     
        if(self::uslovZaTrougao($this->a,$b,$this->c))
        {          
        $this -> b = $b;
        }
    }
    public function setC($c)
    {      
        if(self::uslovZaTrougao($this->a,$this->b,$c)) 
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

    public function obimTrougla()
    {
        $rez = $this->getA() + $this->getB() + $this->getC();
        return $rez;
    }
    public function povrsinaTrougla()
    {
        $a = $this -> getA();
        $b = $this -> getB();
        $c = $this -> getC();
        $s = ($a + $b + $c)/2;
        $kon = sqrt($s*($s-$a)*($s-$b)*($s-$c));
        return $kon;
    }
}


















?>