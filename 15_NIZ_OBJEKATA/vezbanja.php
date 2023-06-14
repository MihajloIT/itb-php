<?php

/*
Cetiri nacina kako da pozovemo klase iz 2 fajla
include "film.php"; -> ako ne postoji fajl samo ignorisi
include_once "film.php"; -> isto radi kao ovo gore, ali ako je ovaj fajl ukljucen ranije onda ga ne ukljucuj ponovo
require "film.php"; -> ako ne postoji fajl, prijavljuje gresku
require_oncee "film.php";ako ne postoji fajl, prijavi gresku ali ako je ukljucen ne ukljucuj ponovo

*/

    //require "film.php";
    require_once "film.php";
    require_once "nemiFilm.php";

    ////////////////////
    //require "nemiFilm.php";  
    //fajl nemiFilm.php vec ima require film.php i zato izbacuje gresku , ali zato sto u nemom filmu postoji clasa "Film" koja se isto zove kao i klasa u fajlu film.php "Film" .. zato se koristi require_once || ali mora i u falju nemiFilm.php da se umesto require stavi require_oncec da bi radilo
////////////////////
    $f1 = new Film("Orlovi rano lete","Aleksandar Djordjevic", 1955, [9,5,4,5,5,10,9,9,9]);
    $f2 = new Film("Toma palcic","Petar Djordjevic", 2000,[5,5,4,10,10,7,1,9,5]);
    $f3 = new Film("Saw","N N", 2003,[5,6,9,9,10,9,9,5,10]);

    // $f1->stampaj();
    // $f2->stampaj();
    // $f3->stampaj();

    $filmovi = [$f1, $f2,$f3];
    foreach($filmovi as $film)
    {
        $film -> stampaj();
    }
function prosecnaOcena($films)
{
        $zbir = 0;
        foreach($films as $f)
        {
            $zbir += $f->prosek();
        }
        $n = count($films);
        return ($n>0) ? $zbir/$n : 0;
}

    echo "<p>Prosecna ocena svih filmova je :" .prosecnaOcena($filmovi)."</p>";

//Napraviti funkciju vekFilmova kojoj se prosleđuje niz filmova i ceo broj (vek), a funkcija ispisuje samo one filmove koji su stvoreni u prosleđenom veku.

function vekFilmova($films, $vek)
{
    foreach($films as $film)
    {
        if(($film->getgodinaIzdanja()/100) < $vek)
        {
            echo "Film u tom veku je : {$film->getNaslov()} <br>";
        }
    }
}
$vek = 20;
vekFilmova($filmovi,$vek);

//Napraviti funkciju osrednjiFilm kojoj se prosleđuje niz filmova a ona vraća film koji je najbliži prosečnoj oceni svih filmova.

function osrednjiFilm($films)
{   
    $max = 100000;
    $naziv = "";
    for($i=0;$i<count($films);$i++)
    {
        if(abs(prosecnaOcena($films)-$films[$i]->prosek())<$max)
        {
            $max = abs(prosecnaOcena($films)-$films[$i]->prosek());
            $naziv = $films[$i]->getNaslov();
        }
    }
    return $naziv;
}

echo "Film najblizi prosecnom je: ".osrednjiFilm($filmovi);


//Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film.

function najboljeOcenjeni($films)
{
    $max =0;
    $film = 0;
    for($i=0;$i<count($films);$i++)
    {
        if($films[$i]->prosek()>$max)
        {
            $max = $films[$i]->prosek();
            $film = $i;
        }
    }
    return $films[$film];
}
echo "<hr>";
echo "<p>Film koji je najbolje ocenjen je: </p> <br>" ;
echo "<p>" .najboljeOcenjeni($filmovi)->stampaj() ."</p>";
echo "<hr>";

//Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu.

function najmanjaOcenaNajboljeg($films)
{
    $naj_film = najboljeOcenjeni($films)->getocene();
    $min = 100000;
    for($i=0;$i<count($naj_film);$i++)
    {
        if($naj_film[$i]<$min )
        {
            $min = $naj_film[$i];
        }
    }
    echo "<p>Najslabija ocena najboljeg filma je $min</p>";
}

najmanjaOcenaNajboljeg($filmovi);

//Napisati funkciju najmanjaOcena kojoj se prosleđuje niz filmova, a koja vraća koja je najmanja ocena koju je bilo koji film dobio.

function najmanjaOcena($films)
{
    $min = 100000;
    for($i=0;$i<count($films);$i++)
    {
        for($j=0; $j<count($films[$i]->getocene());$j++)
        {
            if($films[$i]->getocene()[$j]<$min)
            {
                $min = $films[$i]->getocene()[$j];
            }
        }
    }
    return $min;
}

echo "<p>Najmanji broj koji je neko ikad dobio je ". najmanjaOcena($filmovi) ."</p>";

//Napisati funkciju najcescaOcena kojoj se prosleđuje niz filmova, a ona vraća ocenu koju su filmovi najčešće dobijali. 

function najcescaOcena($films)
{
    $max = 0;
    $cuvar_key = 0;
    $cuvar = array();
    for($i=0;$i<count($films);$i++)
    {
        for($j=0;$j<count($films[$i]->getocene());$j++)
        {
            if(!isset($cuvar[$films[$i]->getocene()[$j]]))
            {                
                $cuvar[$films[$i]->getocene()[$j]] = 1;
            }else
            {               
                $cuvar[$films[$i]->getocene()[$j]] += 1;
            }           
        }
    }
    foreach($cuvar as $key =>$value)
    {
        if($value > $max)
            {
                $max = $value;
                $cuvar_key = $key;
            }
    }  
    return $cuvar_key;   
}

echo "<p>Ocena koja se pojavila najvise puta je ".najcescaOcena($filmovi) ."</p>";


















?>

