<?php

require_once "autokredit.php";


abstract class Kredit
{
    private $naziv;
    private $osnovica;
    private $god_kamata;
    private $br_god_otplate;

    public function __construct($n,$o,$gk,$go)
    {
        
            $this -> naziv = $n;
            $this -> osnovica = $o;
            $this -> god_kamata = $gk;
            $this -> br_god_otplate = $go;
      
    }
    public function getNaziv()
    {
        return $this->naziv;
    }
    public function getOsnovica()
    {
        return $this->osnovica;
    }
    public function getGodKamata()
    {
        return $this->god_kamata;
    }
    public function getOtplata()
    {
        return $this->br_god_otplate;
    }

    public function ispis()
    {
        echo "Kredit tipa {$this->getNaziv()}";
    }

    abstract public  function mesecnaRata();
}





// if(is_string($n) && is_numeric($o) && is_numeric($gk) && is_int($go))
//         {























?>