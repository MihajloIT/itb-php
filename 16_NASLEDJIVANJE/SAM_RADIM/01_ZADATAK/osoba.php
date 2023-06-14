<?php


class Osoba
{
    private $ime;
    private $prezime;
    private $god_rodj;

    public function __construct($i,$p,$gr)
    {
        $this -> setIme($i);
        $this -> setPrezime($p);
        $this -> setgodRodjenja($gr);
    }
    public function setIme($i)
    {
        $this -> ime = $i;
    }
    public function setPrezime($p)
    {
        $this -> prezime = $p;
    }
    public function setgodRodjenja($gr)
    {
        $this -> god_rodj = $gr;
    }
    public function getIme()
    {
        return $this -> ime;
    }
    public function getPrezime()
    {
        return $this -> prezime;
    }
    public function getgodRodjenja()
    {
        return $this -> god_rodj;
    }

    public function ispis()
    {
        echo "<p>Osoba: {$this->getIme()} {$this->getPrezime()} godiste: {$this->getgodRodjenja()}.</p>";
    }
}
























?>