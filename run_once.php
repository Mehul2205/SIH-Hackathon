<?php
require 'server.php';


$sql="CREATE TABLE `db`.`TimeTable` (  `i` INT NOT NULL AUTO_INCREMENT , `id` INT NOT NULL , `room` INT , `teacher` INT, `batch` INT NOT NULL, `subject` INT NOT NULL , `day` INT NOT NULL, `time` INT NOT NULL, PRIMARY KEY (`i`)) ENGINE = InnoDB;";
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