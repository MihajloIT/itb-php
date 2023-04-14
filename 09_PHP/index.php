<?php
    $a ="Zdravo Svete"; // promenljiva @a dobija vrednost zdravo svete
    echo $a ; //ovo prikazuje sting "Zdravo svete?
    echo "<br>";

    $a = 22 ; 
    echo $a;
    echo "<br>";

    $a = 22 + 2; 
    echo $a;
    echo "<br>";

    $a = 2.5 + 8.2; 
    echo $a . "<br>";

    $a = 100;
    $b = $a - 20;
    echo $b . "<br>";

    echo "Vrednost promenljive b je " . "osamdeset" . $b . "<br>";

    echo "Vrednost promenljive b je $b" . "<br>";
    echo 'Ovo je proba kracih navodnika $b' . "<br>"; //da bi razlikovao string od varijable u echo mora dupli navodnici
    $c = "3";
    $d = $c + 2 ;
    echo $d . "<br>"; //uspeo je da izvrsi konverziju stringa 3 kao broj 3 i dodao 2 =5
    // $c = "3a";
    // $d = $c + 2 ;
    // echo $d . "<br>"; fattal eror jer sovo a nije mogao da pretovri u broj

    $c = "3a";
    $d = $c . 2 ;
    echo $d . "<br>"; // prikazuje i sting i broj

    $d = 5 ;
    $d = $d + 2; //novo $d je staro $d vecano za 2
    echo $d . "<br>";

    $d += 2; // skraceni oblik ovog $d = $d + 2

    $d -= 1; //skraceni oblik za $d=$d -1
    echo $d . "<br>";

    // FUNKCIJE % OSTATAK PRI DELJENJU
    //19%6 = 1
    //OPERACIJE STEPENOVANJA
    //5**3 = 5*5*5=125


    echo "<hr>";
    //ZADATAK 1 SA MINUTIMA OD PONOCI

    $h =  20;
    $m =  35;
    $h = 20 * 60;

    $rez = $h + $m ;
    echo "Rezultat zadataka : " . $rez . " " ."minuta" . "<br>"; 
    echo "<hr>";
    //  ZADATAK 2 URADITI PREDHODNI ZADATAK SA TRENUTNIM VREMENOM
    date_default_timezone_set('Europe/Andorra'); //SETOVANJE VREMENSKE ZONE
    $h = date('G');
    $m = date('i');

    echo "Trenutno vreme je: " . $h . " i minuta " . $m . "<br>";
    $rez = $h *60 + $m;
    echo "Rezultat zadatka 2. je : " . number_format($rez, 0, " , " , ".") . " minuta"; 
    // number_format ( varijabla, decimale , odvajanje decimala, odvajanje hiljada )
    echo "<hr>";
?>