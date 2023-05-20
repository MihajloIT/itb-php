<?php
    //zadatak 3.
    $cena= 1400;
    $nov = 2000;
    $kusur= $nov - $cena;
    echo "Kusur iznosi : " . $kusur;
    
    echo "<hr>";

    // zadatak 4.

    $eur = 100;
    $kursEur = 117.5;
    $din = $eur * $kursEur;
    echo "Vrednost u dinarima : " . $din;
    echo "<hr>";

    //zadatak 5.

    $din = 25000;
    $srednjiKurs = 117.5;
    $konverzija = $din / $srednjiKurs;
    echo "Dobice : $konverzija eur";
    echo "<hr>"; 

    //zadatak 6.

    $eur = 15000;
    $eur_din = 117.5;
    $dolar_din = 105 ; 

    $rez_eur_din = $eur * $eur_din;
    $rez_din_dollar = $rez_eur_din / $dolar_din;
    echo "Iz eur u dolare prenece : $rez_din_dollar dollare. ";
    echo "<hr>";

    //zadatak 7. isti kao predhodni

    //8. i 9. isto kuci da radimo , za domaci ce biti slicno


    //zadatak 10.

    $cena = 140;
    $popust = 15;

    $cenaBezPopusta = 140 * 100 / (100-$popust);
    echo $cenaBezPopusta;
    echo "<hr>";

    //zadatak 11.   floor je prvi ceo broj koji je manji od datkog broja
    $n = 122;

    echo "Mirko ce da bije " . floor($n/3) . " dana i ostace mu " . $n % 3 . "tableta";

?>