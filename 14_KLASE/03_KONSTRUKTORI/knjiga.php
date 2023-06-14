<?php

class Knjiga
{
    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena;

    public function __construct($n,$a,$gi,$bs,$c)
    {
        $this -> setnaslov($n);
        $this -> setautor($a);
        $this -> setgodIzdanja($gi);
        $this -> setbrojStrana($bs);
        $this -> setcena($c);
    }
    // SETERI
    public function setnaslov($n)
    {
        $this -> naslov = $n;
    }
    public function setautor($a)
    {
        $this -> autor = $a;
    }
    public function setgodIzdanja($gi)
    {
        $this -> godIzdanja = $gi;
    }
    public function setbrojStrana($bs)
    {
        $this -> brojStrana = $bs;
    }
    public function setcena($c)
    {
        $this -> cena = $c;
    }
    // GETERI
    public function getnaslov()
    {
        return $this->naslov;
    }
    public function getautor()
    {
        return $this->autor;
    }
    public function getgodIzdanja()
    {
        return $this->godIzdanja;
    }
    public function getbrojStrana()
    {
        return $this->brojStrana;
    }
    public function getcena()
    {
        return $this->cena;
    }

    function stampaj()
    {
        echo "<p>Naslov knjige je {$this->getnaslov()}, autor je : {$this->getautor()}, godina izdanja je $this->godIzdanja(), ima $this->brojStrana() strana i kosta $this->cena() . </p>";
    }
    function obimna()
    {
        if($this->getbrojStrana()>600)
        {
            return true;
        }else
        {
            return false;
        }
    }
    function skupa()
    {
        if($this->getcena() > 8000)
        {
            echo "<p>Cena knjige je skupa kosta preko 8000 din</p>";  
        }else
        {
            echo "<p>Cena knjige nije skupa kosta manje od 8000 din</p>";
        }
    }
    
    function dugackoime()
    {    
        $replace = str_replace(" ","",$this->getautor());             
        $duzina = strlen($replace);
        if($duzina > 18 )
        {
            echo "<p>Ime autora je dugacko ima preko 18 karaktera.</p>";
        }else
        {
            echo "<p>Ime autora nije dugacko ima manje od 18 karaktera.</p>";
        }   

    }

    
    
}

$k1 = new Knjiga("Petar Pan","James MC B.",1880,201,2000);


$k1 ->stampaj();
$k1 ->obimna();
$k1 ->skupa();
$k1 ->dugackoime();



?>