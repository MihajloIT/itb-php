<?php

class Auto 
{

    // polja -> marka -> boja ->krov (to nisu promenljive , ako se pozovu na echo $marka izbacice gresku)
    var $marka;
    var $boja ;
    var $imaKrov ;

    // metode
    function sviraj()
    {
        echo "<p>Beep ! Beep !</p>";

    }

    function ispis()
    {
        echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja ;
    
        if($this->imaKrov == true){
            echo " ima krov ";
        }else{
            echo " nema krov ";
        }
        echo "</p>";
    }

}

    // Mozemo da kreiramo objekte klase auto
    $a1 = new Auto();
    var_dump($a1);
    $a1->marka = "Opel";
    $a1 ->boja = "Plava";
    $a1 ->imaKrov = false;
    $a1 ->kubikaza= 1600;
    echo "<br>";
    var_dump($a1);
    echo "<br>";
    $a2 = new Auto();
    $a2->marka = "Peugeot";
    $a2->boja="Bela";
    $a2->imaKrov = false;
    var_dump($a2);

    $a3= new Auto();
    $a3->marka = "Audi";
    $a3->boja = "siva";
    $a3->imaKrov= true;
    echo '<br>';
    echo "<p>Auto marke" . $a3->marka . " borje " . $a3 ->boja . " ima krov " . $a3->imaKrov. "</p>";
    echo "<br>";
   

    $a1->sviraj();
    $a2->sviraj();
    $a3->sviraj();

    // funkcija $this
    $a3 ->ispis();
    $a2->ispis();

    echo "<hr>";

    






?>