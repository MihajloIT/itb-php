<?php

//zadatak 1.
    for($i=1; $i <=20; $i++){

        echo $i . "_";
    }

echo "<hr>";
// zadatak 2.
    for($i=20; $i >= 1; $i--){

        echo $i . "_";
    }
echo "<hr>";
//zadatak 3.
    for($i=1; $i<=20; $i++){

        if($i%2 == 0){
            echo $i . "_";
        }
    }
    echo "<hr>";

// zadatak 4. 

    for($i=5; $i<=15; $i++){

        echo $i+$i . "_";
    }
    echo "<hr>";
// zadatak 5.
    $sum = 0;
    for($i=1; $i<=100;$i++){
        $sum = $sum + $i;


    }
    echo $sum;
    echo "<hr>";
// zadatak 6.
    $n = 25;
    $sum = 0;
    for($i=1; $i <= $n; $i++){
        $sum = $sum+$i;
    }
    echo $sum;
echo "<hr>";
// zadatak 7.

$sum = 0;
$i = 3; // u FOR petlji se postavlja ovo -> ne ovako $n = $i = 3; 
$m = 15;
for($n=$i; $n <= $m; $n++ ){

    $sum += $n;
}
echo "Sum brojeva od $i do $m je : " .$sum;
echo "<hr>";
// zadatak 8

$n = $i = 2; // u foru se ovako resava
$m = 6;
$sum = 1;
for($n = $i; $n <=$m; $n++){
    $sum *= $n;
}
    echo "Proizvod brojeva od $i do $m je : " . $sum ; 

    echo "<hr>";

// zadatak 9

$n = $i = 2;
$m = 10;
$sum = 0;
for($n = $i ; $n <= $m; $n++){
    $sum += $n**2;
}
echo "Suma kvadrata brojeva od $i do $m je : " . $sum;

echo "<hr>";

// zadatak 10


$n =4;
$slike = array("slika1.jpg" , "slika2.jpg" , "slika3.jpg");
for($i = 1; $i <=$n ; $i++ ){
    $pic = $slike[rand(0,2)];
    echo "<img src='$pic' width = '200px' height= '200px' style='border:2px solid red;' >";
   
}
echo "<hr>";


?>
