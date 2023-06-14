<?php

class Film
{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;
    private $ocene;


    public function __construct($n,$r,$god,$o)    
    {
        $this->setNaslov($n);
        $this->setreziser($r);
        $this->setgodinaIzdanja($god);
        $this->setocene($o);
    }

    public function setNaslov($n)
    {
        $this -> naslov = $n;
    }
    public function getNaslov()
    {
        return $this -> naslov;
    }
    public function setreziser($r)
    {
        $this -> reziser = $r;
    }
    public function getreziser()
    {
        return $this -> reziser;
    }
    public function setgodinaIzdanja($g)
    {
        $this -> godinaIzdanja = $g;
    }
    public function getgodinaIzdanja()
    {
        return $this -> godinaIzdanja;
    }
    public function setocene($o)
    {
        $this -> ocene = $o;
    }
    public function getocene()
    {
        return $this -> ocene;
    }

    public function stampaj()
    {
        echo "<p>Film {$this->getnaslov()}, reziser: {$this->getreziser()}, godina: {$this->getgodinaIzdanja()}, ocene: " .implode(", ", $this->ocene) ." prosecna ocena je : {$this->prosek()}</p>";
    }
    public function prosek()
    {
        $sum = 0;
        foreach($this->ocene as $o)
        {
            $sum +=$o;
        }
        $n = count($this->ocene);
        return ($n > 0 ) ? $sum/$n : 0;
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film.php</title>
</head>
<body>
    
</body>
</html>

