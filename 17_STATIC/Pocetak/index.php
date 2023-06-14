<?php

    require_once "krug.php";


    $r1 = new Krug(15);
    $r2 = new Krug(66);
    $r3 = new Krug(-18);

    echo "Povrsina kruga je : ". $r1 -> povrsinaKruga() . "<br>";
    echo "Obim kruga je : ". $r1 -> obimKruga() . "<hr>";

    echo "Povrsina kruga je : ". $r2 -> povrsinaKruga() . "<br>";
    echo "Obim kruga je : ". $r2 -> obimKruga() . "<hr>";

    echo "Povrsina kruga je : ". $r3 -> povrsinaKruga() . "<br>";
    echo "Obim kruga je : ". $r3 -> obimKruga() . "<hr>";

    echo Krug::JA . "<br>";

    //$r1 -> pi = 3.14159; <- ako je public polje, public se preimenuje u private ako hocemo da ogranicimo uticaj na polje
    $c = new Krug (2);    
    $c -> setPi(3.141591);
    echo "Eliz: Povrsina kruga je : ". $c -> povrsinaKruga() . "<br>";
    echo "Eliz: Obim kruga je : ". $c -> obimKruga() . "<hr>";
/// moze da se menjaju vrednosti static vrednostima
    echo Krug::getPi() . "<br>";
    Krug::setPi(3.1415555);
    echo Krug::getPi() . "<br>";
    echo "<hr>";


    $d = new Krug(2.5);
    echo "Eliz: Povrsina kruga je : ". $d -> povrsinaKruga() . "<br>";
    echo "Eliz: Obim kruga je : ". $d -> obimKruga() . "<br>";
    // sad uticemo na decimale
    Krug::setBrDecimala(4);
    echo "Eliz: Povrsina kruga je : ". $d -> povrsinaKruga() . "<br>";
    echo "Eliz: Obim kruga je : ". $d -> obimKruga() . "<hr>";

    echo "Broj napravljenih krugova je : " . Krug::brKrugova() . "<br>";

















?>