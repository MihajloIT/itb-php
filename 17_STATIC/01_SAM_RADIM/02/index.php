<?php

require_once "trougao.php";
require_once "pravougaonik.php";
require_once "kvadrat.php";
require_once "oblik.php";


$t1 = new Trougao(11,11,11);
$t2 = new Trougao(13,6,13);

$k1 = new Kvadrat(44);
$k2 = new Kvadrat(4);

$p1 = new Pravougaonik(12,4);
$p2 = new Pravougaonik(14,11);

$objekti = [$t1,$t2,$k1,$k2,$p1,$p2];

$min_obim = 9999999;
$max_povrsina = 0;
$key_obim = 0;
$key_povrsina = 0;
foreach($objekti as $key => $objekat)
{   
    if($objekat->obim() < $min_obim)
    {
        $min_obim = $objekat->obim();        
        $key_obim = $key;
    }
    if($objekat -> povrsina() > $max_povrsina)
    {
        $max_povrsina = $objekat -> povrsina();
        $key_povrsina = $key;
    }
    
}


echo "<p>Namanji obim ima ".  $objekti[$key_obim]::OBLIK ." dok najvecu povrsinu ima ". $objekti[$key_povrsina]::OBLIK.".</p>";

foreach($objekti as $objekat)
{
    $objekat -> ispisiObim();
    $objekat -> ispisiPovrsinu();
}


echo "<hr>";

//Naći sumu površina svih oblika u nizu

$sum = 0;
foreach($objekti as $objekat)
{
    $sum += $objekat->povrsina();
}
echo "<p>Zbir povrsina svih tela iz niza je $sum</p>";












?>