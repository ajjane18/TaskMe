<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type = "text/javascript" src= "js/login.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>

<form action="loginHandler.php" method="POST" >

    <label for = "firstname"> Please Enter Username:</label>
    <input type="text" name = "username" id = "firstname" placeholder = "Username" required>

    <label for = "password"> Please Enter Password:</label>
    <input type="password" name = "password" id ="password" placeholder = "Password" required>
    <input type="submit" id = "submit" value="Login" >

</form>



<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);   // encrypt the password


    include "dbConfig.php";
    $sql = "INSERT INTO user
         VALUES ('$username','$password')";


    $qryResult = mysqli_query($connec, $sql);

    if ($qryResult == TRUE)
    {
        echo "New user created successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($connec). "<br>";
    }
}
else
{
    echo "Error, username or password missing!";
}

?>




</body>
</html>