<?php
require_once "kvadrat.php";

class Romb extends Kvadrat
{
   private $ugao;

   public function __construct($a,$ugao)
   {
        parent::__construct($a);
        Oblik::__construct(Oblik::ROMB); // pozvali smo klasu za koju je vezana parent klasa tj kvadrat klasa
        $this -> setUgao($ugao);
   }
   
   public function getUgao()
   {
        return $this->ugao;
   }
   public function setUgao($u)
   {
        if($u >0)
        {
            $this -> ugao = $u;
        }else
        {
            $this -> ugao = 0;
        }
   }
   public function povrsina()
   {
        return $this-> getA() * $this->getA() * sin($this->ugao);
   }

//    public function ispis()
//     {
//         echo "<p>Romb: obim {$this->obim()}, povrsina {$this->povrsina()}</p>";
//     }

}



















?>