<?php

//Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite ispite.

$ocene = array
(   6,7,7,7,6,8,8,8,6,8,8,8,8,8,
);

function prosOcena($x)
{
    $sum=0;
    foreach($x as $key => $value)
    {
        $sum += $value;        
    }
    $prosecna_ocena = round($sum/count($x),2);
    return $prosecna_ocena;
}
echo "<p>Prosecna ocena je". prosOcena($ocene)."</p>";

//Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.
function maxOcena($ocene)
{
    $max=0;
    foreach($ocene as $value)
    {
        if($value > $max)
        {
            $max = $value;
        }
    }
    return $max;
}
echo "<p>Maksimalna ocena studneta je" . maxOcena($ocene)."</p>";

//Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

function brMaxOcene($ocene)
{
    $brojac = 0;
    foreach($ocene as $key => $value)
    {
        if($value == maxOcena($ocene))
        {
            $brojac++;
        }
    }
    return $brojac;
}
echo "<p>Broj predmeta sa maksimalnom ocenom je". brMaxOcene($ocene) ."</p>";

// Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

function studenGeneracije($ocene)
{
    for($i=0;$i<count($ocene);$i++)
    {
        if($ocene[$i]<9)
        {
            return false;
        }
    }
    $brojac9 = 0;
    $brojac10 = 0;
    for($i=0;$i<count($ocene);$i++)
    {
        if($ocene[$i]==9)
        {
            $brojac9++;
        }elseif($ocene[$i]==10)
        {
            $brojac10++;
        }
        //else{ return false;} -> mogo sam ovako umesto prvog if uslova
    }
    if($brojac10 > $brojac9)
    {
        return true;
    }else{
        return false;
    }
    // return !($desetka < $devetke) -> ovako odradila Stefani izbacuje isto true i false
}
if(studenGeneracije($ocene))
{
    echo "<p>Ovo je student generacije !</p>";
}else
{
    echo "<p>Ovo je nije student generacije...</p>";
}

//Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
// Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
// Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1.
function maxDuzinaPodniza($ocene)
{
    
    $brojac=0;
    $max_duzina = 0;
    for($i=0;$i<count($ocene);$i++)
    {
        if($ocene[$i] == maxOcena($ocene))
        {
            $brojac++;
        }else
        {
            $brojac=0;
        }
        if($brojac > $max_duzina)
        {
        $max_duzina = $brojac;
        }
    }    
    return $max_duzina;
    
}

echo "<p>Maximalna duzina podniza sa maksimalnom ocenom je ". maxDuzinaPodniza($ocene) ."</p>";



function nasoResenjeMaxNiz($ocene){
    $brojac=0;
    $niz=array();
    for($i=0;$i<count($ocene);$i++)
    {
        if($ocene[$i] == maxOcena($ocene))
        {
            $brojac++;
        }else
        {
            $niz[]=$brojac;
            $brojac = 0;
        }
        if($i == count($ocene)-1)
        {
            $niz[]=$brojac;
        }
    }
    $max_niz = 0;
    for($i=0;$i<count($niz);$i++)
    {
        if($niz[$i] > $max_niz)
        {
            $max_niz = $niz[$i];
        }
    }
    return $max_niz;
}

echo "<p>Moj nacin za maks niz ". nasoResenjeMaxNiz($ocene)."</p>";



// $niz = array
// (
//     ['Matimatika','2015/05.14',8],
//     ['Matimatika 2','2017/05.14',8],
//     ['Matimatika 3','2015/05.14',9],
//     ['Srpski','2012/05.14',6],
//     ['Matimatika 5','2020/05.14',9],
//     ['Sociologija','2015/05.14',10],
//     ['Sociologija1','2015/05.14',9],
//     ['Sociologija2','2015/05.14',8],
//     ['Sociologija3','2015/05.14',10],
// );
echo "<hr>";
/////////////////////NIZ ASOCIJATIVNIH NIZOVA ////////////////


$index = [
    ['naziv'=>'Matematika','datum'=>'2022/06/13','ocena'=>6],
    ['naziv'=>'Srpski','datum'=>'2023/06/12','ocena'=>6],
    ['naziv'=>'Ekonomika','datum'=>'2022/06/12','ocena'=>10],
    ['naziv'=>'Sociologija','datum'=>'2020/06/12','ocena'=>10],
    ['naziv'=>'Matematika 2','datum'=>'2022/06/12','ocena'=>6],
        ];


//Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

function maxOcena2($index)
{
    $max=0;
    for($i=0;$i<count($index);$i++)
    {
        if($index[$i]['ocena']>$max)
        {
            $max = $index[$i]['ocena'];
        }
    }
    return $max;
}

echo "<p>Maksimalna ocena koju je dobio je". maxOcena2($index)."</p>";

// Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.
function predmetiPolozeniGodine($index,$godina)
{
    for($i=0;$i<count($index);$i++)
    {
        if(strpos($index[$i]['datum'],"$godina") !== false)
        {
            echo "<p>Godine $godina student je polozio predmet ". $index[$i]['naziv']."</p>";
        }
    }
}
predmetiPolozeniGodine($index,"2022");
echo "<hr>";
// Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine.

function prosekGodine($index,$godina)
{   
    $sum = 0;
    $brojac = 0;
    for($i=0;$i<count($index);$i++)
    {
        if(strpos($index[$i]['datum'],"$godina") !== false)
        {
            $sum += $index[$i]['ocena'];
            $brojac++;
        }
    }
    if($brojac == 0){
        return 0;
    }
    $rez = $sum / $brojac;
    return round($rez,2);
}
echo "Prosecna ocena te godine je bila : ".prosekGodine($index,"2022");
echo "<hr>";
// Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, vratiti onaj koji je najskorije položio.

function predmetMaxOcena($index)
{   
    $max_date = 0;
    $cuvar = 0;
    for($i=0;$i<count($index);$i++)
    {
        if(strtotime($index[$i]['datum']) > $max_date && $index[$i]['ocena'] == maxOcena2($index)){
            $max_date = $index[$i]['datum'];
            echo $max_date;
        }
    }
    for($i=0;$i<count($index);$i++)
    {
        if($index[$i]['ocena'] == maxOcena2($index) && strtotime($index[$i]['datum']==$max_date))
        {
            $cuvar = $index[$i]['naziv'];
            echo $index[$i]['naziv'] . ",";
        }
    }
    
    return $cuvar;
}

echo "Poslednji ispit sa max ocenom je : " . predmetMaxOcena($index);












//Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.
echo "<hr>";

function trecizadatak($index)
{
    $brojac10 = 0;
    $brojac9 = 0;
    for($i=0;$i<count($index);$i++)
    {
        if($index[$i]['ocena'] == 10)
        {
            $brojac10++;
        }elseif($index[$i]['ocena'] == 9)
        {
            $brojac9++;
        }else
        {
            return false;
        }
    }
    return ($brojac10>=$brojac9);
}

if(trecizadatak($index))
{
    echo "Student generacije";
}else{
    echo "Nije student generacije";
}




// class Ispiti
// {
//     private $naziv;
//     private $semestar;
//     private $ESPB;
//     private $ocena;
//     private $datumpolaganja;

//     public function __construct($a,$b,$c,$d,$e)
//     {
//         $this -> setNaziv($a);
//         $this -> setsemestar($b);
//         $this -> setESPB($c);
//         $this -> setocena($d);
//         $this -> setDatum($e);
//     }
//     public function setNaziv($n)
//     {
//         $this -> naziv = $n;
//     }
//     public function setsemestar($n)
//     {
//         $this -> semestar = $n;
//     }
//     public function setESPB($n)
//     {
//         $this -> ESPB = $n;
//     }
//     public function setocena($n)
//     {
//         $this -> ocena = $n;
//     }
//     public function setDatum($n)
//     {
//         $this -> datumpolaganja = $n;
//     }
//     /// end seteri
//     public function getNaziv()
//     {
//         return $this ->naziv;
//     }
//     public function getsemestar()
//     {
//        return $this ->semestar;
//     }
//     public function getESPB()
//     {
//        return $this ->ESPB;
//     }
//     public function getocena()
//     {
//        return $this -> ocena;
//     }
//     public function getDatum()
//     {
//         return $this -> datumpolaganja();
//     }
//     function string($string)
//     {
//         if(strpos($this->getNaziv(),$string))
//         {

//         }
//     }
    
// }








































// function jedaneska($niz,$godina,$ocena1,$ocena2)
// {   $brojac = 0;
//     for($i=0;$i<count($niz);$i++)
//     {
//         foreach($niz[$i] as $key => $value)
//         {
//             if(strpos($value,$godina) !== false)
//             {
//                 if($niz[$i][2]>$ocena1 && $niz[$i][2]<$ocena2)
//                 {
//                     $brojac++;
//                 }
//             }
//         }
//     }
//     return $brojac;
// }
// $godina = "2015";
// $ocena1 = 7;
// $ocena2 = 10;
// echo "Broj ispita je : " .jedaneska($niz,$godina,$ocena1,$ocena2);


?>