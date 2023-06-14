<?php

    require_once "automobil.php";


/* 
OVAKO SMO RADILI DOK NIJE BILO GET SET I SVE JE BILO JAVNO
    $v = new Vozilo();
    // $v -> boja = "bela";
    // $v -> tip = "BMW";

    // echo  "<p>$v->boja, $v->tip</p>";
    $v -> voziVozilo();
    //$v -> voziAutomobil();<- ovo nece raditi jer vozilo nema metodu voziAutomobil 

    $a = new Automobil();
    // $a -> boja = "zuta";
    // $a -> tip = "Pegueto";
    // echo  "<p>$a->boja, $a->tip</p>";
    $a -> voziVozilo();
    $a -> voziAutomobil();
*/

$v = new Vozilo("bela" , "BMW");
$v ->voziVozilo();

$a = new Automobil("zuta","Peugeout");
$a -> voziVozilo();
$a -> voziAutomobil();










?>