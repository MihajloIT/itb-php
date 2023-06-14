<?php

    require_once "trougao.php";
    require_once "kvadrat.php";
    require_once "pravougaonik.php";


echo "<h4>Trougao</h4>";
    $t1 = new Trougao(11,12,22);
    echo "Trougao 1 obim: " . $t1 -> obimTrougla() . "<br>";
    echo "Trougao 1 povrsina: " . $t1 -> povrsinaTrougla() ."<br>";

    $t2 = new Trougao(7,6,8);
    echo "Trougao 2 pov: " .$t2 -> povrsinaTrougla() . "<hr>";

    echo "<h4>Kvadrat</h4>";
$k = new Kvadrat(14);
echo "Kvardat: ". $k -> obimKvadrata() . "<br>";
echo "Kvardat: ". $k -> povrsinaKvadrata() . "<hr>";

echo "<h4>Pravougaonik</h4>";
$p = new Pravougaonik(5,55);
echo "Pravougaonik: ". $p->obimPravougaonika() . "<br>";
echo "Pravougaonik: ". $p->povrsinaPravougaonika() . "<br>";

$p1 = new Pravougaonik(5,9);
echo "<p>". $p1->obimPravougaonika()."</p>";

$k1 = new Kvadrat(3);
echo "<p>". $k1->obimKvadrata()."</p>";


$oblici = [$t1,$k,$p1];
foreach($oblici as $oblic)
{
    //Javlja se problem jer su elementi niza razlicite figure , trougao kvadrat i pravougaonik

    if(isset(obimTrougla($oblici)))
    {

    }
}













?>