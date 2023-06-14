<?php
require_once "vozilo.php";

class Automobil extends Vozilo
{

    public function voziAutomobil()
    {
        // echo "<p>Automobil {$this->getTip()} boje {$this->getBoja()} u pokretu</p>";
        echo "<p>2. nacin:Automobil {$this->tip} boje {$this->boja} u pokretu</p>";
    }
}



















?>