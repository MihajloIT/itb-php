<?php

$i = 1;
while($i < 6){
    echo "Hello World ! " . "--".$i."--" . "<br>";
    $i++;
}
echo "<br>";
// zanimljmljivo , poveceava vrednost brojeva, i zadrzava vrednost 
echo "$i . <br>";
// $i++;
// echo "$i . <br>";
// $i++;
// // echo "$i . <br>";
// $i++;
// echo "$i . <br>";
// $i++;
// echo "$i . <br>";
// $i++;
echo "<hr>";
// zadatak 1 sa prezentecije

$i = 0;
while($i++ < 20){
    echo "$i" ;
    if($i%4 == 0){
        echo "<br>";
    }
}

// 2. zadatak
$i = 21;
while($i-- >1){
    echo $i . "   ";
    if($i%4 == 0){
        echo "<br>";
    }
}
echo "<hr>";



// 4. zadatak , prof radila
// objasnila je da je isti paragraf a to 'n' treba sam klient da ubise, 'i' ostaje isto
$n=5;
$i = 1;
while($i <= $n){

    
    $i++;
    if($i%3 ==0){
        echo "<p style=' color :blue;'>Proizvoljni paragraf $i</p>";
    }
    if($i%3 ==1){
        echo "<p style=' color :red;'>Proizvoljni paragraf $i</p>";
    }
    if($i%3 ==2){
        echo "<p style=' color :orange;'>Proizvoljni paragraf $i</p>";
    }
}
echo "<hr>";
// $n=5;
// $i = 1;
// while($i <= $n){

//     if($i%3 == 1){
//         $boja = 'blue';
//     }
//     elseif($i%3 == 2){
//         $boja = 'lime';
//     }
//     else{ $boja = "red";}
//     echo "<p style=' color :$boja;'>Proizvoljni paragraf $i</p>";
// }

//zadatak 3.
// on je mislio na $i += $i +2 ; vrv na taj nacin da dodje do parnih
$i = 1;
while($i++ < 20){
    
    if($i%2 == 0){
        echo $i . " ";
    }
}
echo "<hr>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 5. zadatak

$n = 5;
$i = 1;
$index = array('solid 2px red', 'dotted 2px blue' , 'dashed 2px yellow');
while($i <= $n){
    $border = $index[rand(0,2)];
    
    echo "<img src='slika.jpg'; width='200px'; style='border: $border;' >" . "  ";
    $i++;
}
?>
<?php 

// PROIZVOLJNI ZADATAK

$n = 4;
$i = 1;


while($i < $n){
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    $color = "rgb({$r}, {$g}, {$b})";
    
    echo "<p style='color: $color'>OVO JE RANDOM BOJA</p>";
    $i++;

}

?>

<p style='color: rgb(rand(0,255), rand(0,255), rand(0,255))'>PROBA</p>
</body>
</html>

<?php
    // 6. zadatak javlja se na intervjuu za posao
    $num = 100;
    $i = 1;
    $suma = 0;
    while($i <= 100){
        $suma += $i;
        
        $i++;
    }
echo $suma . "<hr>";

// zadatak 7. 
$i = 1;
$n = 5;
$sum = 0;
while($i <= $n){

    $sum += $i;
    $i++;
}
echo $sum . "<hr>";
// 8. zadatak
//stavlja ovak spojeno da u echo pise proizvod brojeva od $n do $m ...
$n = $i = 10;
$m = 20;
$sum = 0;
while($i <= $m){

    $sum += $i;
    $i++;
}
echo "Sum od n do m : " .$sum . "<br>";
// zadatak 9
$n = 1;
$m = 3;
$sum = 1;
while($n <= $m){
    $sum *= $n;
    $n++;
}
echo "Proizvod projeva od $n do $m : " .$sum;
echo "<hr>";
// zadatak 10
$n = 1;
$m = 5;
$sum = 0;
while($n <= $m){
    if($n%2 == 0){
        $sum = $n*$n + $sum;
    }
    $n++;
}
echo "Suma kvadarata parnih : ".$sum;
echo "<hr>";
$n = 1;
$m = 5;
$sum = 0;
while($n <= $m){
    if($n%2 != 0){
        $sum = $n*$n*$n + $sum;
    }
    $n++;
}
echo "Suma kubova neparnih : ".$sum . "<hr>";

// zadatak 11
$k = 56;
$n = 1;
$sum=0;
while($n <= $k){
    if($k%$n == 0){
        $sum++;
    }   
 $n++;
}
echo "broj $k je deljiv $sum puta ..." . "<hr>";

//prof radila 11. -- isto kao i ja odradila

$brojac = 0;
$k = 15;
$i = 1;
while($i <= $k){
    if($k%$i == 0){
        $brojac++;
    }
    $i++;
}
echo "broj $k je deljiv $brojac puta ..." . "<hr>";
echo "<hr>";
// zadatak 12
$n = 139;
$i=2;
$sum = 0;
while($i < $n){
   if($n%$i == 0){
    $sum++;
   }
    $i++;
}
if($sum == 0){
    echo "Broj $n je prost broj ";
}else{ echo "Broj $n nije prost "; }

echo "<hr>";

//prof radila -pocetak ko moj

$n = 15;
$i=2;
$prost = true; // pretpostavka da je broj prost
while($i < $n){
  if($k%$i == 0){
    $prost = false;
    break;
  }
  $i++;
}
if($prost == true){
    echo "Broj $n je prost";
}else{
    echo "Broj $n nije prost ..";
}
?>