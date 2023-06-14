<?php

require_once "sportista.php";

class Kosarkas extends Sportista
{
    private $poeni;


    public function __construct($i,$p,$god,$grad,$poeni)
    {
        parent::__construct($i,$p,$god,$grad);
        $this -> setPoeni($poeni);
    }
    public function setPoeni($poeni)
    {
        $this -> poeni = $poeni;
    }
    public function getPoeni()
    {
        return $this->poeni;
    }

}

function najviseUtakmica($niz)
{
    $max = 0;
    $cuvar = 0;
    foreach($niz as $key => $value)
    {
        if(count($value->getPoeni())>$max)
        {
            $max = count($value->getPoeni());
            $cuvar = $key;
        }
    }
    return $niz[$cuvar]->getIme();
}

function najvisePoena($niz)
{
    $max = 0;
    $cuvar = 0;
    foreach($niz as $key => $value)
    {
        for($i=0;$i<count($value->getPoeni());$i++)
        {
            if($value->getPoeni()[$i] > $max)
            {
                $max = $value->getPoeni()[$i];
                $cuvar = $key;
            }
        }
    }
    return $niz[$cuvar]->getIme();
}

function najviseProsecnoPoena($niz)
{
    $sum = 0;
    $max = 0;
    $cuvar = 0;
    foreach($niz as $key => $value)
    {
        for($i=0;$i<count($value->getPoeni());$i++)
        {
            $sum += $value->getPoeni()[$i];
        }
        if($sum/count($value->getPoeni()) > $max)
        {
            $max = $sum/count($value->getPoeni());
            $cuvar = $key;
        }
        $sum = 0;        
    }
    return $niz[$cuvar]->getIme();
}






















?>