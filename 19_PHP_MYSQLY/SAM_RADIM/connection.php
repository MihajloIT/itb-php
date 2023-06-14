<?php

$host = "localhost";
$acc = "admin";
$passwor = "admin123";
$db = "itboot";


$connection = new mysqli($host,$acc,$passwor,$db);

if($connection -> connect_error)
{
    echo "<p>Doslo je do greske sa konekcijom : ".$connection->connect_error ." </p>";
}else
{
    echo "<p>Connected</p>";
}






?>