<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "taskme";

$connec = new mysqli($servername, $username,$password, $dbname);

if(connec -> connect_error){
    die("Connection failed" . $connec->connect_error);
}

$user_name = $_POST['Username'];
$F_name = $_POST['Firstname'];
$L_name = $_POST['Lastname'];
$age = $_POST['Age'];
$password = $_POST['Password'];
$email = $_POST['email'];

$sql = "INSERT INTO login (username, password, email) values ('$user_name', '$F_name', 'L_name', '$age', '$password', '$email')";

    if($connec->query($sql) === true){

    }
    else{
        echo "error" . $sql . "<br>" . $connec->error;

    }

    $connec->close();
    ?>