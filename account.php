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

<!--Creating a div class to separate title from body!-->
<div class="Title">
    <!--Displays title taskme + Displays logo image!-->
    <a href= "index.php"><img src="images/MiffyIcon.png" width="68" height="68" alt="logo image"></a>
    <h1>TASKME</h1>
</div>

<!-- Separating the title from the main body!-->
<hr>
<br><br>

<!--Displays button for the nav bar-->
<input type="checkbox" id="nav">
<label for="nav">
    <i class="fa-solid fa-bars" id="button"></i>
    <i class="fa-solid fa-xmark" id="cancel"></i>
</label>

<!--Functioning nav bar to teleport user to another page-->
<div class = "navbar">
    <header>NAV BAR</header>
    <!--Including an icon as well as a link for the nav bar-->
    <ul>
        <li><a href= "index.php"><i class="fa-solid fa-house" style="color: #161925;"></i>Home</a></li>
        <li><a href= "account.php"><i class="fa-solid fa-user" style="color: #161925;"></i>Account</a></li>
    </ul>
</div>

<!--Adding a format-->
<div class = "account">

<!--Adding miffy image-->

<img src="images/pinkMiffy.png" width="250" height="250" alt="Miffy image">

<!--Adding the labels and button tags-->
<h4>Login</h4>
    <br>
<a href="login.php">
    <button type = "button"></button>
</a>

    <br>
    <br>

<h4>Signup</h4>
    <br>
<a href="signup.php">
    <button type = "button"></button>
</a>
</div>

<?php

?>
</body>
</html>

