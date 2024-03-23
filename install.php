<?php

/**
 * Opening a source file to create a new database and table via PDO
 */

require_once "config.php";
$sql = file_get_contents("data/taskMeScr.sql");

try {
    $connection = new PDO("mysql:host= $host", $username, $password);


    $connection->exec($sql);
    echo "Database setup";
}
catch(PDOException $error){
    echo $sql . "<br" . $error->getMessage();
}
