<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/head.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navBar.css?v=<?php echo time(); ?>">
</head>
<body>


<!--Creating a div class to separate title from body!-->
<div class="Title">
    <!--Displays title taskme + Displays logo image!-->
    <a id = "logo" href= "index.php"><img src="images/MiffyIcon.png" width="68" height="68" alt="logo image"></a>
    <h1>TASKME</h1>
    <a id = "notifs" href= "https://mail.google.com/mail/u/0/#inbox"><img src="images/notification.png" width="34" height="34" alt="logo image"></a>
    <a id = "user" href= "account.php"><img src="images/user.png" width="34" height="34" alt="user image"></a>
</div>

<!-- Separating the title from the main body!-->
<br><br>
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
        <img src="images/purpleMiffy.png" width="95%" height="80%" alt="logo image">
    </ul>
</div>


</body>
</html>
