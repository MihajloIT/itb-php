<?php

    require_once "trougao.php";
    require_once "kvadrat.php";
    require_once "pravougaonik.php";
    require_once "romb.php";


echo "<h4>Trougao</h4>";
$t1 = new Trougao(13,12,22);
echo $t1 -> obim(); 

echo "<h4>Kvadrat</h4>";
$k = new Kvadrat(14);
$k1 = new Kvadrat(3);

echo "<h4>Pravougaonik</h4>";

$p1 = new Pravougaonik(5,9);

$r1 = new Romb(6,15);




$oblici = [$t1,$k,$p1,$r1];
foreach($oblici as $oblik)
{
    //Javlja se problem jer su elementi niza razlicite figure , trougao kvadrat i pravougaonik
    //echo "<p>Obim je : {$oblik->obim()} , povrsina je : {$oblik->povrsina()}</p>";
    $oblik->ispis();
}













?>