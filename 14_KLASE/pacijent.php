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
            echo "True";
        }else{
            echo "False";
        }
    }

    function KriticanProba(){
        $bmi = $this->Bmi();
        return $bmi <15 || $bmi >40;
    }
}

$p1 = new Pacijent();

$p1 ->ime = "Pera";
$p1 ->visina = 175;
$p1 ->tezina = 93;

$p2 = new Pacijent();

$p2 ->ime = "Zoki";
$p2 ->visina = 205;
$p2 ->tezina = 101;

$p3 = new Pacijent();

$p3 ->ime = "Krsta";
$p3 ->visina = 188;
$p3 ->tezina = 66;

$p1 -> Stampaj();
$p2 -> Stampaj();
$p3 -> Stampaj();

$p1 -> Bmi();
$p2 -> Bmi();
$p3 -> Bmi();

$p1 -> Kritican(); echo "<br>";
$p2 -> Kritican(); echo "<br>";
$p3 -> Kritican(); echo "<br>";

$p3 -> KriticanProba();

?>