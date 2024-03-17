<?php

$connection = new PDO("mysql:host=localhost", "root", "root");
array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);
    echo "DB setup!";
    }catch(PDOException $error){
    echo $sql . "<br>" . $error;
}
class install
{

}