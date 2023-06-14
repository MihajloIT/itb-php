<?php

abstract class Oblik
{

    private $nazivOblika;

    const TROUGAO = "TrougaoPROBAAA";
    const PRAVOUGAONIK = "Pravougaonik";
    const KVADRAT = "Kvadrat";
    const ROMB = "Romb";

    public function __construct($n)
    {
        $this -> nazivOblika = $n ;
    }
    public abstract function obim(); // obim i povrsina su nepotrebne metode nemaju funkciju vec samo zadaju obavezama da izvedene klase imaju te metode.
    
    public abstract function povrsina();
    
    public function ispis()
    {
        echo "<p>{$this->nazivOblika}: obim {$this->obim()}, povrsina {$this->povrsina()}</p>";
    }
}





























?>