<?php

class Knjiga
{
    public $brojStrana;
    public $cena;

}

$k1 = new Knjiga();
$k1 -> brojStrana = 500;
$k1 -> cena = 5000;

$k2 = new Knjiga();
$k2 -> brojStrana = 200;
$k2 -> cena = 3500;

$k3 = new Knjiga();
$k3 -> brojStrana = 330;
$k3 -> cena = 1200;

$k4 = new Knjiga();
$k4 -> brojStrana = 400;
$k4 -> cena = 900;

$k5 = new Knjiga();
$k5 -> brojStrana = 120;
$k5 -> cena = 600;

$knjige = array($k1, $k2, $k3, $k4, $k5);

function maxProsekNiz($knjige)
{
    $max = 0;

    foreach($knjige as $knjiga)
    {
        $t = $knjiga->cena / $knjiga -> brojStrana;
        if($max <$t)
        {
            $max =$t;
        }
    }
    

}

function maxProsekNiza2($knjige)
{
    $max = 0;
    for($i=0; $i <count($knjige);$i++)
    {
        $knjiga = $knjige[$i];
        $t = $knjiga->cena / $knjiga -> brojStrana;
        if($max <$t)
        {
            $max =$t;
        }
    }
}

$k6 = new Knjiga();
$k6 -> brojStrana = 10;
$k6 -> cena = 100;
$knjige[] = $k6;















?>