<?php

require_once "zaposleni.php";


function prosekPlate($sviZaposleni)
{
    $sum = 0;
    $brojac = 0;
    foreach($sviZaposleni as $value)
    {
        $sum += $value->getPlata();
        $brojac++;
    }
    $rez = round(($sum/$brojac),2);
    return $rez;
}
echo "<p>Prosecna plata je ". prosekPlate($zaposleni)."</p>";

function natprosecnaPlata($sviZaposleni,$zaposleni)
{
    if(prosekPlate($sviZaposleni)< $zaposleni->getPlata())
    {
        return true;
    }else
    {
        return false;
    }
}

if(natprosecnaPlata($zaposleni,$zaposleni3))
{
    echo "<p>Zaposleni ima natprosecnu platu</p>";
}else
{
    echo "<p>Zaposleni ima ispodprosecnu platu</p>";
}

















?>