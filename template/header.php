<?php
//session_start();
//if($_SESSION['Active'] == false){
//    header("location:signup.php");
//    exit;
//}
//?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/head.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/navBar.css?v=<?php echo time(); ?>">
</head>
<body>


<!--Creating a div class to separate title from body!-->
<div class="Title">
    <!--Displays title taskme + Displays logo image!-->
    <a id = "logo" href= "../index.php"><img src="../images/MiffyIcon.png" width="68" height="68" alt="logo image"></a>
    <h1>TASKME</h1>
    <a id = "notifs" href= "https://mail.google.com/mail/u/0/#inbox"><img src="../images/notification.png" width="34" height="34" alt="logo image"></a>
    <a id = "user" href= "../account.php"><img src="../images/user.png" width="34" height="34" alt="user image"></a>
</div>

</body>
