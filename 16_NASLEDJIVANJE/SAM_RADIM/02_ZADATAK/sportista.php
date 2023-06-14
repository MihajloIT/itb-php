<?php


class Sportista
{
    private $ime;
    private $prezime;
    private $god_rodjenja;
    private $grad;


    public function __construct($i,$p,$god,$grad)
    {
        $this -> setIme($i);
        $this -> setPrezime($p);
        $this -> setgodRodj($god);
        $this -> setGrad($grad);
    }
    public function setIme($i)
    {
        $this-> ime = $i;
    }
    public function setPrezime($p)
    {
        $this-> prezime = $p;
    }
    public function setgodRodj($gr)
    {
        $this -> god_rodjenja = $gr;
    }
    public function setGrad($grad)
    {
        $this -> grad = $grad;
    }

    public function getIme()
    {
        return $this-> ime ;
    }
    public function getPrezime()
    {
        return $this-> prezime ;
    }
    public function getgodRodj()
    {
        return $this -> god_rodjenja ;
    }
    public function getGrad()
    {
        return $this -> grad ;
    }
}




















?>