<?php



    // zadatak 8

    $date = date("Y/m/d");
    $day = date("l");

    if($day === "Monday"){
        echo "Radni je dan ...";
    }elseif($day === "Tuesday"){
        echo "Radni je dan";
    }
    elseif($day === "Wednesday"){
        echo "Radni je dan";
    }
    elseif($day === "Thursday"){
        echo "Radni je dan";
    }
    elseif($day === "Friday"){
        echo "Radni je dan";
    }
    elseif($day === "Saturday"){
        echo "Dan je neradan";
    }else{
        echo "Dan je neradan";
    }

    echo "<hr>";
    //profa resavao
    $dan = date("w");

    if($dan ==0)//nedelja
    {
        echo "Vidend";
    }elseif($dan == 6) // subota
    {
        echo "Vikend";
    }else{
        echo "Radni je dan";
    }

    echo "<hr>";



    //zadatak 9

    date_default_timezone_set('Europe/Belgrade');
    $time = date ("H");
    echo $time . "<br>";

    if($time < 12){
        echo "Dobro jutro...";
    }elseif($time < 18){
        echo "Dobar dan...";
    }else{
        echo "Dobro vece...";
    }

    echo "<hr>";

    // zadatak 10

    $d_1 = 30;
    $m_1 = 6;
    $g_1 = 1992;
    $d_2 = 30;
    $m_2 = 6;
    $g_2 = 1992;

    if($g_1 < $g_2){
        echo "Dat jedan je RANIJI";
    }elseif($g_1 > $g_2){
        echo "Datum 2 je RANIJI";
    }else{
        if($m_1 < $m_2){
            echo "Datum 1 je RANIJI";
        }elseif($m_1 > $m_2){
            echo "Datum 2 je RANIJI";
        }else{
            if($d_1 < $d_2){
                echo "Datum 1 je RANIJI";
            }elseif($d_1 > $d_2){
                echo "Datum 2 je RANIJI";
            }else { echo "Datum je ISTI";}
        }}
        echo "<hr>";
    //profa resavao usov prvi nije , uslov 2. nije znaci da su godine jednake ne mora onda da se ide na if(== )jer je to ocigledno, onda ide dalje i proverava meseec

    if($g_1 < $g_2){
        echo "Dat jedan je RANIJI";
    }elseif($g_1 > $g_2){
        echo "Datum 2 je RANIJI";
    }
    elseif($m_1 < $m_2){
        echo "Prvi je raniji datum";
    }elseif($m_1 > $m_2){
        echo "Datum 2 je raniji";
    }
    elseif($d_1 < $d_2){
        echo "Datum 1 je raniji";
    }elseif($d_1 > $d_2){
        echo "datum 2 je raniji";
    }else{ echo " Datumi su jednaki";}




   // zadatak 11

   echo "<hr>";
   
   $time = date("H");
   echo $time . "<br>";
    // $resttime = 12;

   if($time > 9){
    
    if($time < 17){
       
        echo "Firma radi";

    }else{echo "Ne radimo";}
    
   }else{ echo "Firma ne radi";}

   echo "<hr>";

   //profa radio

   if($time < 9){
    echo "Ne radimo";
   }elseif($time <= 16){
    echo "Radimo";
   }else {echo "ne radimo";}

   echo "<hr>";
   // zadatak 12

   //prvi lekar
   $p1 = 9;
   $k1 = 10;

   //drugi lekar
   $p2 = 11;
   $k2 = 18;

   if($p1 > $k2){
    echo "Nema poklapanja u smenama lekara";
   }elseif($k1 < $p2){
    echo "Nema poklapanja smena lekara";
   }else{
    echo "Smene se poklapaju";
   }

   //zadtaak 13
echo "<hr>";
   $n = 14;

   if($n%2 == 0){
    echo "Broj $n je paran ";
   }else{
    echo "Broj $n je neparan ...";
   }
echo "<hr>";
   //15zadatak
   $broj1 = 55;
   $broj2 = 22;

   if($broj1 < $broj2){

    echo $broj2 - $broj1;
   }elseif($broj1 == $broj2){
    echo "Brojevi su jednaki";
    }else{
    echo $broj1 - $broj2;
   }

   echo "<hr>";
   //zadtatak 16

   $n = 43434;

   if($n <= 0){
    echo $n-1;
   }else{
    echo $n+1;
   }

   //17 zadatak

   $prvi = 33;
   $drugi =13;
   $treci = 18;


//    if($prvi < $drugi){
        
//         $drugi = $pomocni;
//         $prvi = $drugi;
//         $pomocni = $drugi;
//    }
//    if($prvi < $treci){

//     $prvi = $pomocni;
//     $treci = $prvi;
//     $pomocni = $treci;
//    }
//    if($drugi < $treci){

//     $drugi = $pomocni;
//     $treci = $drugi;
//     $pomocni = $treci;
//    }

   echo "Najveci $prvi, srednji je $drugi , najmanji $treci";

   //profa radio
    $a = 4;
    $b = 13;
    $c = -1;


    $max = $a;
    if($b > $max){
        $max = $b;
    }
    if($c > $max){
        $max = $c;
    }
    $min= $a;
    if($b <$min){
        $min = $b;
    }
    if($c <$min){
        $min = $c;
    }



echo "<hr>";

   //
   $pol = 'z';
   $godine = 24;

   if($pol == 'm' && $godine >= 18){
    echo "Musko punoletno";
   }elseif($pol == 'm' && $godine < 18){

    echo "Musko maloletno";
   }elseif ( $pol == 'z' && $godine >= 18){
    echo "Zensko punoletno";
   }else{
    echo "Zensko maloletno";
   }