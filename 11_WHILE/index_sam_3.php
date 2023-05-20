<?php

$i = 1;
$n = 20;
while($i <= $n){
    echo $i . " _ ";
    $i++;
}
echo "<hr>";
// od svakog 4 broja ide novi red
$i = 1;
$n = 20;
while($i <= $n){
    echo $i . " _ ";
    if($i%4 == 0){
        echo "<br>";
    }
    $i++;
}
echo "<hr>";
// brojevi od 20 do 1
$i = 20;
$n = 1;
while($i >= $n){
    echo "<i>$i</i>" . " _ ";
    if($i%4 == 0){
        echo "<br>";
    }
    $i--;
}
echo "<hr>";

// ispisati parne brojeve od 1 do 20
$i = 1;
$n = 20;
while($i <= $n){
    
    if($i%2 == 0){
        echo " $i ";
    }
    $i++;
}
echo "<hr>";

//ispisati neparne brojeve od 1 do 20
$i = 1;
$n = 20;
while($i <= $n){
    
    if($i%2 != 0){
        echo " $i ";
    }
    $i++;
}
echo "<hr>";
//kreirati n paragrafa i obojite ih u razlicite boje
$i = 1;
$n = 8;
while($i <= $n){
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    $rgb = "rgb({$r} , {$g}, {$b})";

   echo "<p style='color: $rgb'>Ovo je paragraf broj $i </p>" . "<br>";
    $i++;
}
echo "<hr>";

// 5. zadatak kreirati n proizvoljnih slika i staviti razliceite bordere
$i = 1;
$n = 5;
$line = array("solid 2px red", "dotted 2px blue" , "dashed 2px orange");

// echo $border[rand(0,2)];
while($i <= $n){
    $ivica = $line[rand(0,2)];
    echo "<img src='slika.jpg'; width='200px'; height='200px'; style='border: $ivica ;'>" . "   ";
    
    $i++;
}
$index = array("custom", "left");
print_r ($index[rand(0,1)]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            margin: 0 ;
            
        }
        body{background-color:grey;}
        img{margin: 5px;}
    </style>
</head>
<body>
    
</body>
</html>