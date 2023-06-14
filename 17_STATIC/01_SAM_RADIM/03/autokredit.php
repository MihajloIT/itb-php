<?php

require_once "zadatak_vezba.php";

class AutoKredit extends Kredit
{
    private $kamata;
    
    public function __construct($n,$o,$gk,$go,$k)
    {
        parent::__construct($n,$o,$gk,$go);
        $this -> kamata = $k;
    }
    public function getAutoKamata()
    {
        return $this->kamata;
    }
    public function ispis()
    {
        echo "<p>U pitanju je {$this->getNaziv()} na {$this->getOtplata()}</p>";
    }

    public function mesecnaRata()
    {
        $kamata = $this->getOsnovica()*$this->getOtplata()*($this->getGodKamata()+$this->getAutoKamata())/100;
        $ukupan_iznos = $this->getOsnovica()+$kamata;
        $mesecna_rata = $ukupan_iznos/($this->getOtplata()*12);
        return $mesecna_rata;
    }
}





































?>