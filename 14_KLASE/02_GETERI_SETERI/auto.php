<?php

class Auto 
{
   
    private $marka;
    private $boja ;
    private $imaKrov ;
   
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
}

$a1 = new Auto();
// $a1 -> marka = 158; NIJE MOGUCE POLJE MARKA JE PRIVATNO POLJE
echo $a1->getMarka(); // OVO RADI: poziva se geter za polje marak, geter vrati vrednost polja pa onda mi ispisemo tu vrednost

    // nadovezivanje na SETTERE iz clase

    $a1->setMarka("Audi");
    $a1->setBoja("Siva");
    $a1->setimaKrov(true);

    if($a1->getimaKrov()==true){
        echo "Automobil marke " . $a1->getMarka() . " ima krov<br>";
    }else{
        echo "Automobil marke " . $a1->getMarka() . " nema krov<br>";
    }


    class Film 
    {
       
        private $naslov;
        private $reziser ;
        private $godinaizdanja;
       
        public function getfilm(){
            return  $this-> naslov;
        }
        public function getreziser(){
            return  $this-> reziser;
        }
        public function getgodinaizdanja(){
            return  $this-> godinaizdanja;
        }

        public function setfilm($f){
              $this->naslov = $f;
        }
        public function setreziser($r){
              $this->reziser = $r;
        }
        public function setgodinaizdanja($g){             
            if($g < 1800){
                $this -> godinaizdanja = 1800;
             }else{
                $this->godinaizdanja = $g;
             }
        }

    }


$f1 = new Film();
$f1 ->setfilm("Gospodin i gospodja Smit");
$f1 ->setreziser("Reziser 1");
$f1 ->setgodinaizdanja("1700");

echo $f1->getgodinaizdanja();

echo "<hr>";


class Pacijent
{
    private $ime;
    private $visina;
    private $tezina;

    public function getime(){
        return $this-> ime;
    }

    public function getvisina(){
        return $this-> visina;
    }

    public function gettezina(){
        return $this->tezina;
    
    }

    public function setime($i){
        $this -> ime = $i;
    }

    public function setvisina($v){
        
        if(0 < $v && $v < 250){
            $this -> visina = $v;
        }
        elseif(0>$v){

            $this -> visina = 0;
        }
        elseif($v> 250){
            $this -> visina = 250;
        }
    }

    public function settezina($t){
        
        if($t > 0 && $t < 550){
            $this -> tezina = $t;
        }
        elseif($t < 0){
            $this ->tezina = 0;
        }else{
            $this -> tezina = 550;
        }

    }
   
}

$pac = new Pacijent();

$pac->setvisina(16);
echo $pac->getvisina();
echo "<br>";
$pac->settezina(222);
echo $pac->gettezina();




?>