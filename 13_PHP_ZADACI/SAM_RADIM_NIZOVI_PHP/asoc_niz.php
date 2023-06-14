<?php

// Dat je niz elemenata u obliku MarkaAuta/Godište.
$kola = array
(
 'BMW' => 2015,
 'Opel' => 1999,
 'Ford' => 2022,
 'Mustang' => 2019,
 'Fiat' => 2023,
 'Tojota' => 1988,
 'Opel Corsa' => 1998,
 'Opel Tigra' => 2013,
 'Opel Kadet' => 2001,
 'Tiguan Opel' => 2015,   
);

// Ispisati sve automobile, kao i njihova godišta.

foreach($kola as $key => $value)
{
    echo "<p>Automobil marke $key je $value godiste.</p>";
}

//Ispisati automobile koji su stariji od 10 godina.

foreach($kola as $key => $value)
{
    if(($value+9)<date('Y')){
        echo "<p>Automobil u nizu koji je stariji od 10 godina je $key</p>";    
    }
}
echo '<hr>';
//Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.

foreach($kola as $key => $value)
{   
    $rec = "Opel";
    if(strpos($key,$rec) !== false && $value > 2000)
    {
        echo "<p>Model Opel proizveden posle 2000 je : $key</p>";
    }
}
echo "<hr>";
echo "<hr>";
//  Dat je niz elemenata u obliku ImeOsobe/Visina.

$osobe = array
(
    'Vukan' => 181,
    'Jovan' => 188,
    'Ksenija' => 167,
    'Koti' => 201,
    'Batinic' => 178,
    'Zile' => 191,
    'Janjic' => 171,
    'Loli' => 205,
    'Viktor' => 155,
    'Velimir' => 178
);

// Ispisati sve osobe sa njihovim visinama.
foreach($osobe as $key => $value)
{
    echo "<p>Osoba $key je visoka $value</p>";
}

// Ispisati sve natprosečno visoke osobe.
$sum_visina = 0;
foreach($osobe as $key => $value)
{
    $sum_visina += $value;
}
$pros_visina = round($sum_visina/count($osobe),0);
echo "<hr>" . "Prosecna visina niza je $pros_visina";
foreach($osobe as $key => $value)
{
    if($value > $pros_visina)
    {
        echo "<p>Osoba $key je nadprosecne visine</p>";
    }
}


//Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
foreach($osobe as $key => $value)
{
    if($value < $pros_visina && $key[0]=="V")
    {
        echo "<p>Osoba na 'V' visine ispod proseka je $key</p>";
    }
}









?>