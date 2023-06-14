<?php

class Osoba
{
    private $ime;
    private $prezime;
    private $godRodjenja;

    public function __construct($i,$p,$g)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setgodRodjenja($g);
    }

    public function setIme($i)
    {
        $this->ime =$i;
    }
    public function setPrezime($p)
    {
        $this->prezime =$p;
    }
    public function setgodRodjenja($g)
    {
        $this->godRodjenja =$g;
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }
    public function getgodRodjenja()
    {
        return $this->godRodjenja;
    }
    function ispis()
    {
        echo "Osoba {$this->getIme()} prezime {$this->getPrezime()} god {$this->getgodRodjenja()} <br>";
    }
}

$osoba = new Osoba("Pera","Peric",1998);
$osoba -> ispis();



















?>