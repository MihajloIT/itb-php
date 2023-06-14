<?php

    require_once "osoba.php";
    require_once "zaposleni.php";


    $o1 = new Osoba("Adriana","Videnovic",1990);
    $o1 -> ispis();



    $z1 = new Zaposleni("Jovica","Jovanovic",1955,85000,"pravnik");
    $z2 = new Zaposleni("Dragan","Jovic",1998,35000,"programer");
    $z3 = new Zaposleni("Sara","Milic",2001,105000,"elektricar");
    $z4 = new Zaposleni("Zika","Zikic",1999,70000,"sociolog");
    $z5 = new Zaposleni("Kaca","Cvijic",1992,185000,"ekonomista");
    
    $zaposleni = [$z1,$z2,$z3,$z4,$z5];


    $z1 -> ispis();

    echo "<p>Prosecna plata zaposlenih je : ". prosekPlate($zaposleni)."</p>";

    echo "<p>Zaposleni ima natprosecnu platu : ". natprosecnaPlata($zaposleni,$z5)."</p>";









?>