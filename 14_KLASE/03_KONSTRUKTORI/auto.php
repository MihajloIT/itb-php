<?php

class Auto 
{
   
    private $marka;
    private $boja ;
    private $imaKrov ;
   
    // KONSTRUKTOR

    public function __construct($m, $b, $ik)
    {
        $this->setMarka($m);
        $this -> setBoja($b);
        $this -> setimaKrov($ik);
    }



    // GETERI vracaju vrednostt polja
    public function getMarka(){
        return $this-> marka;
    }
    public function getBoja(){
        return $this->boja;
    }
    public function getimaKrov(){
        return $this->imaKrov;
    }
    // SETTERI postavljaju vrednost polja

    public function setMarka($m){
        $this->marka = $m;
    }
    public function setBoja($b){
        $this->boja = $b;
    }
    public function setimaKrov($k){

        if($k === true || $k === false){

            $this->imaKrov = $k;
        }else{
            // ako ne bude tru ili false da bude recimo difolt false
            $this->imaKrov = false;
        }
    }  
    function ispis()
    {
        if($this->getimaKrov()==true){
            echo "Automobil marke " . $this->getMarka() . " ima krov<br>";
        }else{
            echo "Automobil marke " . $this->getMarka() . " nema krov<br>";
        }
    }
}
// 1. kreiramo objekat 
$a1 = new Auto("Fiat","roze",true);
//3. koristimo objekat(zovemo metode za dati objekat)  


//2. setujemo vrednosti polja 
$a1 ->setMarka("BMW");
$a1 ->setBoja("plava");
// $a1 ->setImaKrov(false);
   
$a1 ->ispis();

    
 // nadovezivanje na SETTERE iz clase
//  $a2 = new Auto();
// $a2->setMarka("Audi");
// $a2->setimaKrov(true);
// $a2->setBoja("Siva");




class Knjiga
{

}






?>