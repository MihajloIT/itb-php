<?php

    require_once "vozilo.php";
    require_once "automobil.php";

    $v = new Vozilo("Javno" , "Zasticeno" , "Privatno");
    $v -> ispis();

    //echo $v->privatnoPolje; <- van klase se ne moze pristupiti privatnim poljima ili metodama
    //echo $v -> zasticenoPolje; <- ne moze se pristupiti ni protected polju ili metodi
    echo $v -> javnoPolje; // javnom polju se samo moze pristupiti izvan klase

    $a = new Automobil("Public" , "Protected","Nece ovo",5);
    $a -> ispis();
    //$a -> ispisAuto(); <- error je zbog privatnog polja




















?>