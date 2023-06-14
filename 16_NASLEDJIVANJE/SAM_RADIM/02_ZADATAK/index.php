<?php

require_once "sportista.php";
require_once "kosarkas.php";


$k1 = new Kosarkas("Vladica","Jovanovic",1982,"Leskovac", [12,4,55,12,3]);
$k2 = new Kosarkas("Stefan","Zigic",1992,"Kosovo", [12,22,60]);
$k3 = new Kosarkas("Dragan","Petrovic",1981,"Navalin", [12,13,6,7,4,11,33]);
$k4 = new Kosarkas("Predrag","Stojkovic",1978,"Kursumlija", [12,11,10,9,11,44]);
$k5 = new Kosarkas("Marko","Stjelja",1982,"Beograd", [59,18,18,21,222]);

$kosarkasi = [$k1,$k2,$k3,$k4,$k5];


echo "<p>Igrac sa najvise utakmica je : ". najviseUtakmica($kosarkasi) ."</p>";

echo "<p>Igrac sa najvise poena na utakmici je : ". najvisePoena($kosarkasi) . "</p>";

echo "<p>Igrac sa najvise poena u proseku je : ". najviseProsecnoPoena($kosarkasi)."</p>";




















?>