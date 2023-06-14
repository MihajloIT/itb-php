<?php

require_once "connection.php";

// a) ID – int(10) unsigned auto_increment
// b) IME – varchar(50) not null
// c) PREZIME – varchar(100) not null
// d) EMAIL – varchar(100)
// e) BROJ_TELEFONA - varchar(20)



$upit = "CREATE TABLE `studenti`
(
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) ,
    `broj_telefona` VARCHAR(20)
)";

$upit2 = "INSERT INTO `studenti`
VALUES
(null,'Mihajlo','Stefanovic','miha@gmail.com','0641234')
";

$upit3 = "SELECT * FROM `studenti`";

$r = $connection ->query($upit3);
// UNUTAR WHILE PETLJE HAVTAMO RED PO RED REZULTATA KOJI DAJE SELECT UPIT
if($r->num_rows>0)
{
    while($row=$r->fetch_assoc())
    {
        echo "<p> id=".$row['id']." ime = ".$row['ime']." prezime". $row['prezime']."</p>";
    }
}else
{
    echo "Nema rezultata ovaj select: ". $upit3;
}

// DRUGI NACIN DA UHVATIMO SVE REDOVE OD JEDNOM
$r2 = $connection->query($upit3);
$arr = $r2->fetch_all(MYSQLI_ASSOC);

foreach($arr as $row)
{
    echo "<p> id2=".$row['id']." ime2 = ".$row['ime']." prezime2". $row['prezime']."</p>";
}


if($connection -> query($upit2))
{
    echo  "<p>Uspesno napravljena tabela.</p>";
}else
{
    echo  "<p>Doslo je do greske.</p>" . $connection ->error;
}


$upiti = [];
$upiti[]=[
    'id' => 1,
    'upit'=> "CREATE TABLE IF NOT EXISTS studenti 
    (
        id int(10) UNSIGNED AUTO_INCREMENT primary key,
        ime varchar(50) not null,
        prezime varchar(100) not null,
        email varchar (100),
        broj_telefona varchar(20) 
    );",
        'opis' => 'Dodavanje tabela studenti'
    ];
$upiti[]=
[
    'id' => 2,
    'upit' => "INSERT INTO studenti 
    VALUES
    (null,'Mihajlo','Stefanovic','miha@gmail.com','0641234');",
    'opis' => 'Insert u tabelu studenti'
];

$izvrseni = $connection ->query("SELECT id FROM `db_update`;");
$arr = $izvrseni -> fetch_all(MYSQLI_ASSOC);
$ids = [];
foreach ($arr as $value)
{
    $ids[]= $value['id'];
}

if(count($upiti)==count($ids))
{
    echo "SVI UPITI SU IZVRSENI";
}else
{
    foreach ($upiti as $u)
    {
        if(!in_array($u['id'],$ids)){
            $r = $connection -> query($u['upit']);
            if($r)
            {
                // echo "Upit je uspesno izvrsen";
                $r2 = $connection ->query("INSERT INTO `db_update`
                VALUE (".$u['id'] .",'".$u['opis'] ."')");
            }else
            {
                echo "Doslo je do greske " . $connection->error;
                break; // da se napusti foreach petlja ako je doslo do greske
            }
        }
    }
}








?>