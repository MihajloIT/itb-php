<?php

require_once "autokredit.php";


$a = new AutoKredit('AutoKredit',20000,7,3,2);

$a -> ispis();

echo "<p>Mesecna rata je ". $a->mesecnaRata()."</p>";




 










?>