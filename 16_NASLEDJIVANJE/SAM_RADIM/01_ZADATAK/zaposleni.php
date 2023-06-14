<?php

    require_once "osoba.php";


class Zaposleni extends Osoba
{
    private $plata;
    private $pozicija;

    public function __construct($i,$p,$gr,$pl,$poz)
    {
        parent::__construct($i,$p,$gr);
        $this -> setPlata($pl);
        $this -> setPozicija($poz);
    }

    public function setPlata($pl)
    {
        $this-> plata = $pl;
    }
    public function setPozicija($poz)
    {
        $this -> pozicija = $poz;
    }
    public function getPlata()
    {
        return $this -> plata;
    }
    public function getPozicija()
    {
        return $this -> pozicija;
    }

    public function ispis()
    {
        echo "<p>Osoba: {$this->getIme()} {$this->getPrezime()} godiste: {$this->getgodRodjenja()} plata: {$this->getPlata()} pozicija: {$this->getPozicija()} .</p>";
    }
}


function prosekPlate($niz)
{
    $sum = 0;
    $brojac = 0;
    foreach($niz as $value)
    {
        $sum += $value->getPlata();
        $brojac++;
    }
    $pr_plata = $sum / $brojac;
    return $pr_plata;
}

function natprosecnaPlata($niz,$zaposleni)
{
    return (prosekPlate($niz) < $zaposleni->getPlata())? true : false;
}
























?>