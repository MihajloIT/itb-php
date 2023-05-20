<?php
// 13 zadatak
$i = 20; // dodamo jedan da bi $i-- stavimo iznad if-a ili da se napise $i + 1 kao sto sam i odradio
$n = 1;
$rezultat = 1;
while($i >= $n){
    
    if($rezultat < 10000){
        $rezultat = $rezultat * $i;
        
    }else{break;}
    $i--;
}
$i=$i+1;
echo "Prvi broj koji predje 10 000 je broj <i style= 'color:red;'>$rezultat</i>" . "<br>"; 
echo "Broj koji je zadnji mnozio je " . "<i style='color:green'>$i</i>";
echo "<hr>";
//zadatak 14
$n = 2;
$m = 55;
$sum = 0;
while($n < $m){
        
        if($sum <= $m){
        $sum = $n*$n;
        
        }else{ break;}
    
    $n++;
}

echo $sum . "<br>" ;
echo "Poslednji broj koji je ucestvovao : " . ($n-1);
?>