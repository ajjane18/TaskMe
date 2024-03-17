<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type = "text/javascript" src= "js/index.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>

<!--Creating a div class to separate title from body!-->
<div class="Title">

    <!--Displays logo image!-->
    <img src="images/logo.jpg" alt="logo image">

    <!--Displays title taskme!-->
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
        <li><a href= "index.php"><i class="fa-light fa-house" style="color: #90b1c2;"></i>Home</a></li>
        <li><a href= "login.php"><i class="fa-light fa-user" style="color: #93b5c6;"></i>Login</a></li>
    </ul>
</div>

</body>
</html>