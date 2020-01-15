<?php
require 'server.php';


$sql="CREATE TABLE `db`.`TimeTable` ( `id` INT NOT NULL , `room` VARCHAR(10) NOT NULL , `teacher` VARCHAR(50) NOT NULL , `batch` VARCHAR(10) NOT NULL , `subject` VARCHAR(20) NOT NULL , `day` VARCHAR(20) NOT NULL , `time` TIME NOT NULL, UNIQUE `id` (`id`)) ENGINE = InnoDB;";
if ($conn->query($sql) === FALSE)
{
    echo "Database error 2". $conn->error;
}

$sql="CREATE TABLE `db`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `firstname` TEXT NOT NULL , `lastname` TEXT NOT NULL , `email` VARCHAR(150) NOT NULL ,  `password` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
if ($conn->query($sql) === FALSE)
{
    echo "Database error 3". $conn->error;
}



?>