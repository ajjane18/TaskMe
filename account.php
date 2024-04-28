<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Account Page</title>
    <link rel="stylesheet" type="text/css" href="css/loginCss.css">
    <link rel="stylesheet" type="text/css" href="css/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">
    <script type = "text/javascript" src= "js/login.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>
<br>
<!--Adding a format-->
<div class = "account">

<!--Adding miffy image-->

<img src="images/pinkMiffy.png" width="250" height="250" alt="Miffy image">

<!--Adding the labels and button tags-->
<h4>Login</h4>
    <br>
    <a href="login.php">
        <button type="button"></button>
    </a>

    <br>
    <br>

<h4>Signup</h4>
    <br>

    <a href="signup.php">
        <button type="button"></button>
    </a>

</div>
</body>
</html>

<?php
include "template/footer.php";
?>
