<?php


//Kreirati klasu Film koja sadrži:
// polje naslov
// metodu stampaj() za prikaz naslova filma.
// Kreirati tri objekta klase Film.
// U klasi Film dodati polja:
// reziser
// godinaIzdanja. 
// Izmeniti metodu tako da prikazuje sva polja.
// Testirati metode klase.

    class Film
    {
        var $naslov;

        function stampaj(){
            echo "<p>Nasov filma je " . $this->naslov ."</p>";
            echo "<p>Naslov je ". $this->naslov. " reziser je ". $this->reziser . " godinaizdanja je ". $this->godinaizdanja ."</p>";
        }

    }
    $f1 = new Film();
    $f1 ->naslov = "Godzila";
    $f1 ->reziser = "Pera";
    $f1 ->godinaizdanja = 1999;

    $f2 = new Film();
    $f2 ->naslov = "Titanik";
    $f2 ->reziser = "Zika";
    $f2 ->godinaizdanja = 2000;

    $f3 = new Film();
    $f3 ->naslov = "Notebook";
    $f3 ->reziser = "Karlo";
    $f3 ->godinaizdanja = 2005;

    $f3->stampaj();
    $f1->stampaj();
    $f2->stampaj();



    class Film2
    {
        var $naslov;

        function stampaj(){
            echo 
            "       
             <table>
                <tr>
                    <th>Film $this->naslov</th>
                    <th>reziser je $this->reziser</th>
                    <th>nastao je $this->godinaizdanja</th>
                </tr>
             </table>      
                
            ";
        }

    }

    $m1 = new Film2();

    $m1 -> naslov = "Lord of the rings";
    $m1 -> reziser = "Peter Jacskon";
    $m1 -> godinaizdanja = "2001";

    $m1 -> stampaj();






?>