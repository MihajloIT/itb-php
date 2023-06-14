<?php

    require_once "vozilo.php";

    class Automobil extends Vozilo
    {
        private $brojVrata;

        public function __construct($j,$z,$p,$bv)
        {
             // on vec vuce polje vuce konstrukcor iz clase Vozilo, sad mu samo dodajemo jos elemenata 
             parent:: __construct($j,$z,$p); //pozvali smo construct iz klase Vozilo
             $this -> brojVrata = $bv;            
        }


        public function ispisAuto()
        {
            $this -> ispis();
            echo "<p>Automobil: " . $this->javnoPolje . " ," . $this->zasticenoPolje . " , ". $this->brojVrata . "</p>";
        }
    }

    



























?>