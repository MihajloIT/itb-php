<?php

$brojStrana = array(500,300,150,2000);
        $cena= array(1000,5000,349,111);

function maxProsek($brojStrana,$cena)
{
    // $max = $cena[0]/$brojStrana[0];
    $max=0;
    for($i=1; $i<count($brojStrana); $i++)
    {
        $t=$cena[$i]/$brojStrana[$i];
        if($max < $t)
        {           
            $max=$t;   
        }
    }
}

$brojStranaA = array('knjiga1' =>500, 'knjiga2'=>200,'knjiga3'=>330,'kjiga5'=>120);
$cenaA = array('knjiga1' =>5000, 'knjiga2'=>3500,'knjiga3'=>3230,'kjiga5'=>1120);

function maxProsekA($brojStranaA,$cenaA)
{
    $max = 0;
    foreach($brojStranaA  as $key => $value)
    {
        $t = $cenaA[$k]/$v;

    }
}

$nizKnjiga = array
(
    ['brojStrana'=>500 , 'cena'=>5000],
    ['brojStrana'=>200 , 'cena'=>5060],
    ['brojStrana'=>100 , 'cena'=>1000],
    ['brojStrana'=>1500 , 'cena'=>2000],
    ['brojStrana'=>500 , 'cena'=>500],
);

function maxProsekNizaa($nizKnjiga)
{
    $max = 0;
    for($i=0; $i<count($nizKnjiga); $i++)
    {
        $t = $nizKnjiga[$i]['cena']/$nizKnjiga[$i]['brojStrana'];
        if($max<$t)
        {
            $max = $t;
        }
    }
    return $max;
}

$dan = array('temepratura' =>array(5,12,-1,0,3));
for($i=0;$i<count($dan);$i++)
{
    $t=$dan['temperatura'][$i];
}
?>