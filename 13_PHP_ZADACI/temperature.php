<?php

    $dan = array(
        "dan" => "2023/05/16",
        "kisa" => true,
        "sunce" => true,
        "oblacno" => false,
        "temperature" => array(5, 8, 13, 17, 12, 9, 6)
    );

    // Zadatak broj 15
    function prosecnaTemp($x){
        $temperature = $x["temperature"];
        $count = count($temperature);
        $sum = 0;
        foreach($temperature as $value){
            $sum += $value;
        }
        if($sum != 0){
            $rez = $sum / $count;
            return $rez;
        }
        return false;
    }

    $prosecna_temperatura = prosecnaTemp($dan);
    echo "<p>Prosecna temperatura dana " .  $dan["dan"] . " je $prosecna_temperatura</p>";

    // Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom.

    function merenjaMax($x){
        $temperature = $x["temperature"];               
        $prosecna_temperatura = prosecnaTemp($x);
        $brojac = 0;
        foreach($temperature as $value){
            
            if($value > $prosecna_temperatura){
                $brojac++;
            }
        }
        return $brojac;
    }
    $brojac = merenjaMax($dan);
    echo "<p>Broj merenja temperature iznad proseka je: $brojac</p>";

    // Napisati funkciju koja prima dva parametra koji predstavljaju dve temperature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti).

    
?>