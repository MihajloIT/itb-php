<?php


abstract class Kredit
{
    protected $naziv;
    protected $osnovica;
    protected $god_kamata;
    protected $br_god_otplate;

    public function __construct($n,$o,$gk,$brgo)
    {
        if(is_string($n) && is_int($brgo) )
        {
            $this -> naziv = $n;
            $this -> osnovica = $o;
            $this -> god_kamata = $gk;
            $this -> br_god_otplate = $brgo;
        }

    }
    public function getNaziv()
    {
        return $this->naziv;
    }
    public function ispis()
    {
        echo "<p>Vrsa: {$this->naziv}, osnovica je {$this->osnovica}, god kamata je {$this->god_kamata}, i broj godina otplate je {$this->br_god_otplate}.</p>";
    }

    public abstract function MesecnaRataKredita();
}



























?>