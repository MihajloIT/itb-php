<?php

require_once "kredit.php";

class StambeniKredit extends Kredit
{
    public function __construct($n,$o,$gk,$brgo)
    {
        parent::__construct($n,$o,$gk,$brgo);
    }
    public function MesecnaRataKredita()
    {
        $mesecna_kamata = $this->god_kamata/12/100;
        $stepen = pow(1+ $mesecna_kamata, $this->br_god_otplate*12);
        $mesecna_rata = ($this->osnovica*$mesecna_kamata*$stepen)/($stepen-1);
        return $mesecna_rata;
    }
    
}

// $s = new StambeniKredit("Stambeni",20000,7,40);
// echo "Kamata za stambeni kredite je : ".$s -> MesecnaRataKredita();
// echo $s -> MesecnaRataKredita();





























?>