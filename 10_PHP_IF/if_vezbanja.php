<?php

    //zadatak 1. prezentacija
    $a = 55;
    $b = 10;

    if($a > $b){
        echo "<p>Broj $a je veci od broja $b... </p> ";
    }else{

        echo "<p>Broj $b je veci ili jednak od broja $a</p>";
    }


    //drugi nacin skraceno da se ne ide na if()itd
        echo "<p>Veci je broj " . (($a>$b) ? $a : $b) . "</p>" ;
    // ako je $a > $b ide ovo $a , a else je $b to su termalni operatori, ovi gore sa if su binarni. Postoje i unarni operatori sa minusom ? binarni trazi 2 vrednosti , termalni trazi 3 vrednosti

    // zadatak broj 4

    $doba_dana = date("a");
    
    if($doba_dana == "am"){
        echo "<p>Trenutno je pre podne</p>";
    }else{
        echo "<p>Trenutno je posle podne</p>";
    }
    //alternativni 4. zadatak
    if($doba_dana == "pm"){
        echo "<p>Trenutno je posle podne</p>";
    }else{
        echo "<p>Trenutno je pre podne</p>";
    }



    //zadatak broj 3 , stavljeni jednostruki navodnici u echo-u !!!

    $pol = "Z";
    if($pol == "M"){
        echo "<p><img src='slike/m.png' alt='slika muskarca'></p>";
    }else{
        echo "<p><img src='slike/f.png' alt='slika zene'></p>";
    }


    //zadatak broj 2 

    $celzijus = -10;

    if($celzijus >= 0){
        echo "<p>Temperatura je u plusu ! </p>";
    }else{
        echo "<p>Temperatura je u minusu !</p>";
    }

    //zadatak broj 5

    $godina_sa_racunara = date("Y");
    $datum_rodjenja = 2006;

    $punoletstvo = $godina_sa_racunara - $datum_rodjenja;

    if($punoletstvo > 17){
        echo "<p>Osoba je punoletna</p>";
    }else{
        echo "<p>Osoba je maloletna</p>";
    }

    // zadatak broj 6

    $a = 2223423422;
    $b = 22;
    $c = -1111;

    if($a > $b){
        if($a > $c){
            if($b > $c){
                echo "$a > $b > $c";
            }else{
                echo "$a > $c > $b";
            }
        }else{ echo "$c > $a > $b";}
    }elseif($b > $c){
        if($a > $c){
            echo "$b > $a > $c";

        }else{ echo " $b > $c > $a";}
    }
   
    // profa radi

    if($a > $b){
        //menjamo im mesta 
        $pom = $a;
        $a = $b;
        $b = $pom;
        //uveo pomocnu varijablu da bi u a stavio manju vrednost izmedju dve promenljive
    }

    if($a >$c){

        $pom = $a;
        $a = $c;
        $c = $pom;
        //nakon ovoga u a je sigurno najmanja vrednost
    }

    if($b > $c){
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    
    echo "<p>$c > $b > $a</p>";


    //ZADATAK ELSEIF
    $broj = 115;

    if($broj <=10){
        echo "<p>Prva desetica</p>";
    }elseif($broj<=20){
        echo "<p>Druga desetica</p>";
    }else{
        echo "<p>Broj je veci od 20</p>";
    }


    $br_poena = 91;

    if($br_poena > 90){
        echo "Ucenik je dobio ocenu 10";
    }elseif($br_poena > 80) {
        echo "Ucenik je dobio ocenu 9";
    }elseif($br_poena > 70){
        echo "Ucenik je dobio ocenu 8";
    }elseif($br_poena > 60){
        echo "Ucenik je dobio ocenu 7";
    }elseif($br_poena > 50){
        echo "Ucenik je dobio ocenu 6";
    }else{
        echo "Ucenik je pao ispit ...";
    }

    ?>
