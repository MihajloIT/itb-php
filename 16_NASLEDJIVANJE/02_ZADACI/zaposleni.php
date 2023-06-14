<?php

require_once "osoba.php";

class Zaposleni extends Osoba
{
    private $plata;
    private $pozicija;

    public function __construct($i,$p,$g,$pl,$poz)
    {
        parent::__construct($i,$p,$g);
        $this -> setPlata($pl);
        $this -> setPozicija($poz);
    }
    public function setPlata($pl)
    {
        $this->plata = $pl;
    }
    public function setPozicija($poz)
    {
        $this -> pozicija = $poz;
    }
    public function getPlata()
    {
        return $this->plata ;
    }
    public function getPozicija()
    {
        return $this -> pozicija;
    }

    function Ispis2()
    {
        echo "Osoba {$this->getIme()} prezime {$this->getPrezime()} god {$this->getgodRodjenja()} plata {$this->getPlata()} pozicija {$this->getPozicija()}. <br>";
    }
    function osobaZaposlen()
    {
        if($this->getPozicija() == "ekonomija")
        {
            echo "<p>{$this->getIme()} je zaposlen u ekonomskom sektoru...</p>";
        }
    }
}

$zaposleni1 = new Zaposleni("Zika","Zikic",1990,65000,"Pripravnik");
$zaposleni1 -> Ispis2();
$zaposleni1 -> osobaZaposlen();

$zaposleni2 = new Zaposleni("Stefan","Zigic",1992,100000,"ekonomija");
$zaposleni2 -> osobaZaposlen();

$zaposleni3 = new Zaposleni("Laza","Lazic",1992,35000,"ekonomija");

$zaposleni = [$zaposleni1,$zaposleni2,$zaposleni3];




















?>