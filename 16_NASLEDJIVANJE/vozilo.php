<?php

class Vozilo
{
    protected $boja;
    protected $tip;

    public function __construct($b,$t)
    {
        $this -> setBoja($b);
        $this -> setTip($t);
    }
    public function setBoja($b)
    {
        $this -> boja = $b;
    }
    public function setTip($t)
    {
        $this -> tip = $t;
    }
    public function getBoja()
    {
        return $this -> boja;
    }
    public function getTip()
    {
        return $this -> tip;
    }




    public function voziVozilo()
    {
        echo "<p>Vozllo u pokretu {$this->getTip()} boje {$this->getBoja()}.</p>";
    }
}














?>