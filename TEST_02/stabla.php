<?php

$stabla = [15,11,13,44,34,12,10,22,5,3,7,25,2,11,13,44,34,12];

function brojNeposecenihStabala($stabla,$testera)
{
    $brojac = 0;
    for($i=0;$i<count($stabla);$i++)
    {
        if($stabla[$i] <= $testera)
        {
            $brojac++;
        }
    }
    return $brojac;
}

echo "<p>Broj stabala koja nisu posecena je ".brojNeposecenihStabala($stabla,10)  ."</p>";

function ukupnoPoseceno($stabla,$testera)
{
    $sum = 0;
    for($i=0;$i<count($stabla);$i++)
    {
        if($stabla[$i] > $testera)
        {
            $sum += ($stabla[$i]-$testera);
        }
    }
    return $sum;
}
echo "<p>Duzina posecenih drva je: ".ukupnoPoseceno($stabla,10)  ." metara.</p>";

function maxDuzina($stabla,$testera)
{
    $brojac =0;
    $max = 0;
    for($i=0;$i<count($stabla);$i++)
    {
        if($stabla[$i] > $testera){
            $brojac++;
        }else
        {
            $brojac =0;
        }
        if($brojac > $max)
        {
            $max = $brojac;
        }
    }
    return $max;
}
echo "<p>Maksimalan niz uzastopno posecenih stabala je : ".maxDuzina($stabla,10)  ." stabala.</p>";






















?>