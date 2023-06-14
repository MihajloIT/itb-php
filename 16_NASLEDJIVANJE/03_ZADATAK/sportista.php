<?php

class Sportista
{
    private $ime;
    private $prezime;
    private $godRodjenja;
    private $grad;

    public function __construct()
    {
        
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

}































?>