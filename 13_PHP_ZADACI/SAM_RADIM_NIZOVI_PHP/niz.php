<?php

//Ispisati sve elemente niza od 5 stringova.
$niz = array("Vespa", "Pegoet", "BMW", "Piago", "Tomos");
for ($i = 0; $i < count($niz); $i++) {
    echo "<p>$niz[$i]</p>";
}

// Odrediti zbir elemenata celobrojnog niza.
$brojevi = array(34, 22, 11, 9, -14 , -99, 101, 0, 233,1,3);
$sum = 0;
for ($i = 0; $i < count($brojevi); $i++) {
    $sum += $brojevi[$i];
}
echo "Zbir svih elemenata selobrojnog niza je : $sum !";

// Odrediti srednju vrednost elemenata celobrojnog niza.
$sr_vr = $sum / count($brojevi);
echo "<p>Srednja vrednost niza je : $sr_vr</p>";

//Odrediti maksimalnu vrednost u celobrojnom nizu.
$max = 0;
for ($i = 0; $i < count($brojevi); $i++) {
    if ($brojevi[$i] > $max) {
        $max = $brojevi[$i];
    }
}
echo "<p>Maksimalna vrednost niza je $max</p>";

//Odrediti minimalnu vrednost u celobrojnom nizu. *
$min = $niz[0];
for ($i = 1; $i < count($brojevi); $i++) {
    if ($brojevi[$i] < $min) {
        $min = $brojevi[$i];
    }
}
echo "<p>Minimalna vrednost niza je $min</p>";

// Odrediti indeks najvećeg elementa celobrojnog niza.
$max = 0;
for ($i = 0; $i < count($brojevi); $i++) {

    if ($brojevi[$i] > $max) {
        $max = $brojevi[$i];
        $max_index = $i;
    }
}
echo "<p>Index maximalnog broja u nizu je $max_index a max vrednost je $max</p>";

//Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti. *

$brojac = 0;
for ($i = 0; $i < count($brojevi); $i++) {

    if ($brojevi[$i] > $sr_vr) {
        $brojac++;
    }
}
echo "<p>Broj elemenata u nizu koji imaju vecu vrednost od prosecne je $brojac</p>";

// Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'. *
$niz = array("Vespa", "Pegoet", "BMW", "Piago", "Tomos", "Ananas", "Ivi","Aster","aaaau","Arsenal");
$brojac = 0;
for($i=0;$i<count($niz);$i++)
{
    for($j=0; $j<strlen($niz[$i]);$j++)
    {        
        if($niz[$i][$j] === "a")
        {
            $brojac++;
            break;
        }
    }
}
echo "<p>Broj elemenata u nizu koje imaju slovo 'a' je $brojac</p>";


//Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'. 

$brojac = 0;
for($i=0;$i<count($niz);$i++)
{
    if($niz[$i][0] === "A" || $niz[$i][0] === "a")
    {        
        $brojac++;
    }
}
echo "<p>Broj elemenata u nizu koji pucinju slovom 'a' ili 'A' je $brojac</p>";









?>