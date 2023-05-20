<?php
    $letovi = array(
        'Subotica' => 50,
        'Beograd' => 60,
        'Lazarevac' => 15,
        'Surdulica' => 60,
        'Leskovac' => 10,
        'Kraljevo' => 60,
    );

    function maxBrojPutnika($x){
        $max_broj_putnika = 60;
        foreach($x as $grad => $putnici){
            if($putnici == $max_broj_putnika){
                echo "<p>Na letu $grad je bilo maksimalan broj putnika.</p>";
            }
        }
        
    }

// Letovi na kojima je bilo maksimalan broj putnika , max br putnika je 60
maxBrojPutnika($letovi);

//Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.

function brojMax($x){
    $brojac = 0;
    $max_broj_putnika = 60;
    foreach($x as $grad => $putnici){
        if($putnici == $max_broj_putnika){
            $brojac++;
        }
    }
    return $brojac;
}

$rezultat = brojMax($letovi);
echo "<p>Broj letova sa maksimalnim kapacitetom je $rezultat</p>";

//Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.



function prosek($x){
    $brojac = 0;
    $sum_putnika = 0;
    foreach($x as $grad => $putnici){
        $brojac++;
        $sum_putnika = $sum_putnika + $putnici;
        
    }
    $prosecan_br_putnika = $sum_putnika/$brojac;
    return $prosecan_br_putnika;
}
$rezultat = prosek($letovi);
echo "<p>Prosecan broj putnika na svim letovima tog dana bio je $rezultat</p>";

//Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).

function isplativ($x, $y){
    $brojac = 0;
    $ukupan_broj_letova = count($x);
    foreach($x as $grad => $putnici){
        if($putnici > $y){
            $brojac++;
        }
    }
    if($brojac != 0){             
        if($ukupan_broj_letova/$brojac > 0.5){
             return true;
        }
    }
             return false;
}


$granica = 60;
$rez = isplativ($letovi, $granica);
if($rez){
    echo "<p>Dan je bio isplativ !</p>";
}else{
    echo "<p>Dan nije bio isplativ :(</p>";
}

// Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).

function alarmantan($x, $y){
    
    foreach($x as $grad => $putnici){
        if($putnici < $y){
            return true;
        }            
        }
        return false;
}

$granica = 1;
$rez = alarmantan($letovi, $granica);
if($rez){
    echo "<p>Stanje je ALARMATNO</p>";
}else{
    echo "<p>Stanje nije alarmantno, LAGANI smo danas...</p>";
}

//Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.

function dobreDestinacije($x){
    $prosek = prosek($x);
    foreach($x as $letovi => $putnici){
        if($putnici >= $prosek){
            echo "<p>$letovi</p>";
        }
    }
}

echo "Dobre destinacije su:";
dobreDestinacije($letovi);



