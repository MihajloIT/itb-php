<?php


class Film
{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;

    public function getnaslov()
    {
        return $this -> naslov ;
    }
    public function getreziser()
    {
        return $this -> reziser;
    }
    public function getgodinaIzdanja()
    {
        return $this -> godinaIzdanja;
    }
    public function setnaslov($n)
    {
        $this -> naslov =$n ;
    }
    public function setreziser($r)
    {
        $this -> reziser =$r;
    }
    public function setgodinaIzdanja($g)
    {
        $this -> godinaIzdanja =$g;
    }

    function stampaj()
    {
        echo 
        "
            <table>
                <tr>
                    <td>Naslov filma je {$this->getnaslov()}.</td>
                    <td>Film je rezirao {$this->getreziser()}.</td>
                    <td>Film je proizveden {$this->getgodinaIzdanja()} godine.</td>
                </tr>
            </table>
        ";
    }
}

$f1 = new Film();
$f1 ->setnaslov("Baja mali kninza");
$f1 -> setreziser("Jovan Perisic");
$f1 -> setgodinaIzdanja(1988);


$f1->stampaj();












?>