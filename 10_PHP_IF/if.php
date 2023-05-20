<?php

    $a = 5;
    $b = 5;
    $c=10;

        //$a == $b -> vrednost je true i zado ulazi u viticastu i nastavlja funkciju
        if($a == $b){

            echo "<p>Hello World ! ! ! </p>";
        }
       

        echo "<p>Nastavljamo dalje ... </p>";


        if($a != $b){

            echo "<p>$a nije jednako $b </p>";
        }

        $br1 = 3;
        $br2 = "3";  // kad se broj stavi pod navodnike "" postaje string
        if($br1 == $br2){
            echo "<p>$br1 jednako je po vrednosti sa $br2 ...</p>";
        }

        if($br1=== $br2){

            echo "<p>$br1 jednako je po vrednosti i tipu sa $br2 ...</p>";
        }


        // KORISTIMO ELSE 
        $a = 5;
        $b = 6;
        if($a > $b){
            echo "<p>$a je vece od $b</p> ";
        }else{
            echo "<p>$a je manje ili jednako od $b</p>";
        }
    
?>