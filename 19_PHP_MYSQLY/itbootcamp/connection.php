<?php

// OOP POVEZIVANJE BAZE SA TABELAMA
    $host = "localhost";
    $username = "admin";
    $password = "admin123";
    $db = "itbootcamp";

    $connection = new mysqli($host, $username, $password,$db);

    if($connection -> connect_error)
    {
        die("Nije uspela konekcija." . $connection ->connect_errno);
    }else
    {
        echo  "<P>Uspesno sam se konektovao</P>";
    }




















?>