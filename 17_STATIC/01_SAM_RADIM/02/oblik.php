<?php


abstract class  Oblik
{
    private $imeOblika;

    public function __construct($o)
    {
        $this -> imeOblika = (is_string($o))? $o:"Pogresno ste uneli naziv";
    }
    public function setimeOblika($o)
    {
        $this -> imeOblika = (is_string($o))?$o : "Ne mozete uneti brojeve";
    }
    public function getimeOblika()
    {
        return $this -> imeOblika;
    }

    public abstract function obim();
    
    public abstract function povrsina();
    
    public function ispisiObim()
    {
        echo "<p>Obim je : " .$this-> obim()."</p>";
    }
    public function ispisiPovrsinu()
    {
        echo  "<p>Povrsina je : " .$this->povrsina() ."</p>";
    }
}









































?>