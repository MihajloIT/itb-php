<?php

$cena = ['Mandarine' => 1300, 'Jagode' => 2200, 'Kruske' => 50, 'Sljive'=>34, 'Breskve'=>88];
$kolicina = ['Mandarine' => 0, 'Jagode' => 40, 'Kruske' => 0, 'Sljive'=>88, 'Breskve'=>105];

function stanje($cena,$kolicina)
{
    foreach($kolicina as $key => $value)
    {
        if($value > 0)
        {
            echo "<p><span style='color:green'>$key</span> ima na sanju.</p>";
        }else
        {
            echo "<p><span style='color:red'>$key</span> nema na sanju.</p>";
        }
    }
}

stanje($cena,$kolicina);

function prvoPonudi($cena,$kolicina)
{
    $max = 0;
    foreach($kolicina as $key => $value)
    {
        $uk_vrednost = $value*($cena[$key]);
        if($uk_vrednost > $max)
        {
            $max = $uk_vrednost;
        }
    }
    $cuvar_kljuca = "";
    foreach($kolicina as $key => $value)
    {
        $uk_vrednost = $value*($cena[$key]);
        if($uk_vrednost == $max)
        {
            $cuvar_kljuca = $key;
        }
    }
    return $cuvar_kljuca;
}

echo "Voce sa max vrednoscu je : ".prvoPonudi($cena,$kolicina) . "<br>";


$cena = ['Mandarine' => 1300, 'Jagode' => 2200, 'Kruske' => 50, 'Sljive'=>34, 'Breskve'=>88];
$kolicina = ['Mandarine' => 20, 'Jagode' => 40, 'Kruske' => 10, 'Sljive'=>88, 'Breskve'=>105];
$kupovina = ['Mandarine' => 1,                'Kruske' => 1,'Sljive' =>1];

function vrednostKupovine($cena,$kolicina,$kupovina)
{
    $sum = 0;
    foreach($kolicina as $key => $value)
    {
        foreach($kupovina as $key2 => $value2)
        {
            if($key === $key2)
            {
                if($value >= $value2)
                {
                    $sum += ($value2*$cena[$key2]);
                }else
                {
                    $sum += $value*$cena[$key2];
                }
            }
        }
    }
    return $sum;
}
echo "<p>Klijent treba da plati ". vrednostKupovine($cena,$kolicina,$kupovina)  ." dinara.</p>";
























?>