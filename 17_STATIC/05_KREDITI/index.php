<?php
require_once "kredit.php";
require_once "stambeni.php";
require_once "autokredit.php";



$a1 = new AutoKredit("Auto kredit", 12000,2.5,10,1.3);
$a2 = new AutoKredit("Auto kredit", 12000,5,1,2.2);
$a3 = new AutoKredit("Auto kredit", 7000,9,6,3);

$s1 = new StambeniKredit("Stambeni kredit", 20000,7,20);
$s2 = new StambeniKredit("Stambeni kredit", 50000,4,5);
$s3 = new StambeniKredit("Stambeni kredit", 10000,9,40);

$krediti = [$a1,$s2,$a3,$s1,$s3,$a2];


foreach($krediti as $kredit)
{
    $kredit -> ispis();
}


foreach($krediti as $kredit)
{
    echo "<p>Mesecna {$kredit->getNaziv()} rata kredita je " . $kredit -> MesecnaRataKredita() ."</p>";
}

















?>