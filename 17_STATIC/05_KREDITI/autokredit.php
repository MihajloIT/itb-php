<?php

require_once "kredit.php";

class AutoKredit extends Kredit
{
    private $auto_kamata;

    public function __construct($n,$o,$gk,$brgo,$aut_kam)
    {
        parent::__construct($n,$o,$gk,$brgo);
        $this -> auto_kamata = $aut_kam;
    }

    public function ispis()
    {
        echo "<p>Vrsta: {$this->naziv}, osnovica je {$this->osnovica}, god kamata je {$this->god_kamata}, i broj godina otplate je {$this->br_god_otplate}, dok je auto kamata {$this->auto_kamata}.</p>";
    }

    public function MesecnaRataKredita()
    {
        $kamata = $this->osnovica * $this->br_god_otplate*($this->god_kamata+$this->auto_kamata)/100;
        $ukupan_iznos = $this->osnovica + $kamata;
        $mesecna_rata = $ukupan_iznos/($this->br_god_otplate*12);
        return $mesecna_rata;
    }

    
}

// $a = new AutoKredit("Auto Kredit",5000,7,2,2);
// echo $a -> MesecnaRataKredita();






























?>