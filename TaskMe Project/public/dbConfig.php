<?php

$servername = "localhost";
$username = "root/www";
$password = "";
$dbname = "MyDatabase";

$connec = mysqli_connect($servername, $username, $password, $dbname);

if($connec){
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Successfully Connected to Database<br/><br/>";
}

?>

class dbConfig
{

}