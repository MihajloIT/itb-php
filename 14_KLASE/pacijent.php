<?php

//     Kreirati klasu Pacijent koja od polja sadrži:
//  ime
// visina 
// tezina. 
// Od metoda sadrži:
// Stampaj() koja ispisuje sve podatke o pacijentu,
// Bmi(), koja vraća bmi vrednost pacijenta,
// Kritican(), koja vraća true ukoliko je bmi pacijenta manji od 15 ili veći od 40, a u suprotnom vraća false.
// Kreirati tri objekta ove klase i testirati metode.

class Pacijent
{
    var $ime;
    var $visina;
    var $tezina;

    function Stampaj(){
        echo "<p>Ime pacijenta je " . $this->ime . " visina je ". $this->visina. " tezina je " . $this->tezina ."</p>";
    }

    function Bmi(){
        echo "<p>BMI pacijenta je " . $this->tezina/(($this->visina/100)**2) . "</p>" ;
    }

    function Kritican(){

        $bmi = $this->tezina/(($this->visina/100)**2);
        if($bmi<15 || $bmi>40){
            return true;
        }
        return false;
    }

    function KriticanProba(){
        $bmi = $this->Bmi();
        return $bmi <15 || $bmi >40;
    }
}

$p1 = new Pacijent();

$p1 ->ime = "Pera";
$p1 ->visina = 175;
$p1 ->tezina = 993;

$p2 = new Pacijent();

$p2 ->ime = "Zoki";
$p2 ->visina = 205;
$p2 ->tezina = 101;

$p3 = new Pacijent();

$p3 ->ime = "Krsta";
$p3 ->visina = 188;
$p3 ->tezina = 90;

$p1 -> Stampaj();
$p2 -> Stampaj();
$p3 -> Stampaj();

$p1 -> Bmi();
$p2 -> Bmi();
$p3 -> Bmi();
echo "<hr>";
echo $p1 -> Kritican(); echo "<br>";
echo $p2 -> Kritican(); echo "<br>";
echo $p3 -> Kritican(); echo "<br>";
echo "<hr>";
$p3 -> KriticanProba();

?>