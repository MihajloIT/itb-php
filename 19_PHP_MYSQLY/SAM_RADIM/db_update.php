<?php

require_once "connection.php";

$upiti = [];

$upiti[]=
[
    'id' => 1,
    'query'=> "CREATE TABLE IF NOT EXISTS `db_upiti`
    (
        `id` INT PRIMARY KEY ,
        `opis` VARCHAR(225) NOT NULL        
    );",
    'opis' => "Kreiranje tabele db_upit"

];

$upiti[] = 
[
    'id' => 2,
    'query' => "CREATE TABLE IF NOT EXISTS `db_update`
    (
        `id` INT PRIMARY KEY ,
        `opis` VARCHAR(255) NOT NULL,
    ); ",
    'opis' => "Kreiranje tabele db_update"
];

$upiti[] =
[
    'id' => 3,
    'query'=> "CREATE TABLE IF NOT EXISTS `studenti`
    (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `ime` VARCHAR(45) NOT NULL,
        `prezime` VARCHAR(45) NOT NULL,
        `broj_telefona` VARCHAR(50),
        `email` VARCHAR(100)
    );",
    'opis' => "Kreiranje tabele studenti"
];


    $db_veza = $connection->query( "CREATE TABLE IF NOT EXISTS `db_upiti`
    (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `opis` VARCHAR(225) NOT NULL        
    );");

$check = $connection -> query("SELECT `id` FROM `db_upiti`;");
$take_all = $check->fetch_all(MYSQLI_ASSOC);
$izvrseni = [];
foreach($take_all as $value)
{
    $izvrseni[] = $value;
}

if(count($upiti) != count($izvrseni))
{
    foreach($upiti as $value)
    {
        if(!in_array($value['id'],$izvrseni))
        {
            $r = $connection -> query($value['query']);
            if($r)
            {
                $r2 = $connection->query("INSERT INTO `db_upiti` 
                            VALUES (".$value['id'].",'".$value['opis'] ."');");
                
                if(!$r2)
                {
                    echo "<p>Doslo je do kreske izvrsenja</p>";
                }
            }
        }
    }
}














?>