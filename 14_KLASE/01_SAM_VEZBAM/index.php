<?php

//Napraviti klasu Auto koja od polja ima: marka , boja , imaKrov Kao i metodu sviraj()

class Auto
{
    var $marka;
    var $boja;
    var $imaKrov;

    function sviraj(){
        echo "<p>Beep... Beep...</p>";
    }

}

$a1 = new Auto();
echo $a1->sviraj();

//Kreiranje objekata

$a1 -> marka = "Audi";
$a1 -> boja = "zelena";
$a1 -> imaKrov = true;
echo "<p>Marka automobila je {$a1->marka} boja je {$a1->boja} i krov {$a1->imaKrov}</p>";

$a2 = new Auto();
$a2 -> marka="BMW";
$a2 -> boja = "plava";
$a2 -> imaKrov = false;

echo "<p>Automobil marke {$a2->marka} boje {$a2->boja} status krova {$a2->imaKrov}</p>";

// Kljucna rec $this

class Bicikla
{
    var $marka;
    var $boja;
    

    function sviraj()
    {
        echo "<p>Marka bicikle je {$this->marka}, njena boja je {$this->boja}..</p>";
    }

}

$b1 = new Bicikla();
$b1 -> marka = "BMX";
$b1 -> boja = "metalik zelena";

$b2 = new Bicikla();
$b2 -> marka= "Ponika";
$b2 -> boja = "siva";

$b3 = new Bicikla();
$b3 -> marka = "Polar";
$b3 -> boja = "zuta";

echo $b3->sviraj();
echo $b2->sviraj();


// Kreirati klasu Film koja sadrži:
// polje naslov
// metodu stampaj() za prikaz naslova filma.
// Kreirati tri objekta klase Film.
// U klasi Film dodati polja:
// reziser
// godinaIzdanja. 
// Izmeniti metodu tako da prikazuje sva polja.
// Testirati metode klase.

class Film
{
    var $naslov;
    // var $reziser;
    // var $godinaIzdanja;
    function stampaj()
    {
        echo 
        "
            <table>
                <tr>
                    <td>Naslov filma je $this->naslov.</td>
                    <td>Film je rezirao $this->reziser.</td>
                    <td>Film je proizveden $this->godinaIzdanja godine.</td>
                </tr>
            </table>
        ";
    }
}

    $f1 = new Film();
    $f1 -> naslov = "Zikina dinastija";
    $f1 -> reziser = "Zoran Calic";
    $f1 -> godinaIzdanja = 1985;
    
    $f2 = new Film();
    $f2 -> naslov = "Vruc vetar";
    $f2 -> reziser = "Aleksandar Djordjevic";
    $f2 -> godinaIzdanja = 1980;

    $f3 = new Film();
    $f3 -> naslov = "Bela ladja";
    $f3 -> reziser = "Sinisa Pavic";
    $f3 -> godinaIzdanja = 2006;

    echo $f1->stampaj();
    echo $f2->stampaj();
    echo $f3->stampaj();

//     Kreirati klasu Pacijent koja od polja sadrži:
//     ime
//    visina 
//    tezina. 
//    Od metoda sadrži:
//    Stampaj() koja ispisuje sve podatke o pacijentu,
//    Bmi(), koja vraća bmi vrednost pacijenta,
//    Kritican(), koja vraća true ukoliko je bmi pacijenta manji od 15 ili veći od 40, a u suprotnom vraća false.
//    Kreirati tri objekta ove klase i testirati metode.
   
class Pacijent
{
    var $ime;
    var $visina;
    var $tezina;
    function stampaj()
    {
        echo "<p>Ime pacijenta je: {$this->ime}, visina je: {$this->visina}, tezina je {$this->tezina}.</p>";
    }
    function BMI()
    {
        echo "<p>BMI vrednost pacijenta je: ". $this->tezina/($this->visina/100)**2  ."</p>";
    }
    function kritican()
    {
        $bmi = $this->tezina/($this->visina/100)**2;
        if($bmi<15 || $bmi>40)
        {
            return true;
        }
        return false;
    }
}
    $p1 = new Pacijent();
    $p1 ->ime = "Jovanka";
    $p1 ->visina = 155;
    $p1 -> tezina = 89;

    $p2 = new Pacijent();
    $p2 ->ime = "Miroslava";
    $p2 ->visina = 201;
    $p2 -> tezina = 101;

    $p3 = new Pacijent();
    $p3 ->ime = "Zoki";
    $p3 ->visina = 191;
    $p3 -> tezina = 903;

    echo $p1->stampaj();
    echo $p1->BMI();
    echo $p1->kritican();
    echo "<hr>";
    echo $p2->stampaj();
    echo $p2->BMI();
    echo $p2->kritican();
    echo "<hr>";
    echo $p3->stampaj();
    echo $p3->BMI();
    echo $p3->kritican();
    echo "<hr>";



?>