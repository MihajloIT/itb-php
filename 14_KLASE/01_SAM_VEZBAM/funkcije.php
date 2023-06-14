<?php

function zbir($a,$b)
{
    $rez = $a + $b;
    return $rez;
}

$c = zbir(2,6);
$d = zbir(12,8);
$e = zbir($c,$d);
echo "<p>Rezultat je $e</p>";
echo "<br>" . zbir(zbir(10,2),zbir(18,-20)) . "<br>";


function ceobroj(int $a, int $b)
{
    $c = $a + $b;
    return $c;
}
echo ceobroj(23,5);

echo "<hr>";
$z = 1000;
function zbir2(&$i,$b)
{    
    echo "Proba" . $GLOBALS ['z'] . "-----"; // GLobal uzima vrednost izvan f-ije , ne mora da bude u zagradi
    $i = $i + $b;    
}
$a = 2;
$b= 10;
zbir2($a,$b);
echo $a . "<br>";
zbir2($a,$b);
echo $a;
echo "<hr>";

// Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.Pozvati funkciju i testirati njen rad.

function neparan($br)
{
    if($br%2 != 0)
    {
        return true;
    }else
    {
        return false;
    }
}
$br = 123;
if(neparan($br))
{
    echo "<p>Broj je neparan</p>";
}else
{
    echo "<p>Broj je paran </p>";
}

//Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.Pozvati funkcije i testirati njihov rad.

function maks2($a,$b)
{
    if($a > $b)
    {
        return $a;
    }else{
        return $b;
    }
}
$a = 23;
$b=12;
echo "Veci broj od $a i $b je : ".maks2($a,$b);


function maks4($c,$d)
{
    if($c > $d)
    {
        return $c;
    }else{
        return $d;
    }
}
$prvi = 444;
$drugi = 88888;
$treci = 11111;
$cetvrti = 101;

echo "<p>Najveci od 4 broja je : " . maks4(maks2($prvi,$drugi),maks2($treci,$cetvrti)) . "</p>";
echo "<hr>";
//Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.Pozvati funkciju i testirati je za različite url adrese.

function slika($picture)
{
    echo "<img src='$picture'  width='300px' height='300px'>";
}
$slika1 = 'https://media-cdn.tripadvisor.com/media/photo-s/1a/bf/c9/e2/la-france-est-belle.jpg';
$slika2 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIEjyglvxpN5NtbudzaFSB9CaHh4idxd16p7Fs1Gp&s';
$slika3 = 'https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg';
$slika4 = 'https://images.news18.com/ibnlive/uploads/2021/06/1622715559_disha.jpg?impolicy=website&width=510&height=356';

slika($slika1);
slika($slika2);
slika($slika3);
slika($slika4);
echo "<hr>";

function obojenaRec($boja,$rec)
{
    echo "<p style='color:$boja'>$rec</p>";
}

$boja = "green";
$rec = "Ovo je neka proizvoljna rec";
obojenaRec($boja,$rec);

//Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati)

function recenica1()
{
    for($i=15;$i<=(15+3*4);$i+=3)
    {
        echo "<p style='font-size:$i'>Neki random paragraf</p>";
    }
}
recenica1();

//Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.

function recenica2($font)
{
    echo "<p style='font-size:$font'>Proizvoljni paragraf</p>";
}
recenica2(34);
recenica2(18);
recenica2(22);
recenica2(31);
recenica2(10);

//Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

function aritmeticka($n,$m)
{
    $sum = 0;
    $brojac = 0;
    for($i=$n;$i<=$m;$i++)
    {
        $sum+=$i;
        $brojac++;
    }
    $ar_sr = $sum / $brojac;
    return $ar_sr;
}

echo "Aritmeticka sredina brojeva je : " . aritmeticka(15,50);

//Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.
echo "<br>";
function aritmetickaCifre($n,$m)
{
    $sum = 0;
    $brojac = 0;
    for($i=$n;$i<=$m;$i++)
    {
        if($i%10 == 3 || $i%10 == -3)
        {
            $sum += $i;
            $brojac++;
        }
    }
    $rez = $sum / $brojac;
    return $rez;
}

echo "<p>Ar. sredina br sa zadnjom cifromo 3 je : ". aritmetickaCifre(-3,33)."</p>";
 

//Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.Napišite funkciju praksa kojoj se prosleđuju brojevi n i a. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).

function praksa($n,$a,$d)
{
    $sum_zarada = $n*$a + ($n-1)*$d;
    return $sum_zarada;
}
echo "Zarada ukupna ce biti : " . praksa(12,30000,5000) ;








?>