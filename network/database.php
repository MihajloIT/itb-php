<?php
require_once "connection.php";

$sql = " CREATE TABLE IF NOT EXISTS `users`
        (
            `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `username` VARCHAR(255) NOT NULL UNIQUE,
            `password` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`id`)
        )ENGINE = innodb;";





if($connection -> query($sql))
{
    echo "<p>Tables created successfully</p>";
}else
{
    header("Location: error.php?m=". $connection->error); 
    // ovde ide samo error ,a ne connect_error je ovo nije za konekciju nego sasvim druga greska
}










?>