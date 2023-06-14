<?php

class Trougao 
{
    private $a;
    private $b;
    private $c;

    public function __construct($a,$b,$c)
    {
        if($a>0 && $b>0 && $c>0 && $a+$b > $c && $a + $c > $b && $b + $c >$a)
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
        if($a >0 && $this->c > 0 && $this->b > 0 && $a + $this->b > $this->c && $a + $this->c > $this->b && $this->b + $this->c > $a) // ovde se ovako pise uslov, ali ovo je uslov za menjanje kad je vec consturk postavio objekat, pa kad menjamo neki element objekta da uslov bude ispunjen
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
        if($b >0 && $this->c > 0 && $this->a > 0 && $b + $this->a > $this->c && $b + $this->c > $this->a && $this->a + $this->c > $b)
        {          
        $this -> b = $b;
        }
    }
    public function setC($c)
    {      
        if($c >0 && $this->a > 0 && $this->b > 0 && $c + $this->b > $this->a && $c + $this->a > $this->b && $this->b + $this->a > $c) 
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