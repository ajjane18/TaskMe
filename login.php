<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/loginCss.css">
    <link rel="stylesheet" type="text/css" href="css/navBar.css">
    <script type="text/javascript" src="js/login.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Title and logo -->
<div class="Title">
    <a href="index.php"><img src="images/MiffyIcon.png" width="68" height="68" alt="logo image"></a>
    <h1>TASKME</h1>
</div>

<!-- Navigation bar -->
<input type="checkbox" id="nav">
<label for="nav">
    <i class="fa-solid fa-bars" id="button"></i>
    <i class="fa-solid fa-xmark" id="cancel"></i>
</label>
<div class="navbar">
    <header>NAV BAR</header>
    <ul>
        <li><a href="index.php"><i class="fa-solid fa-house" style="color: #161925;"></i>Home</a></li>
        <li><a href="Account.php"><i class="fa-solid fa-user" style="color: #161925;"></i>Account</a></li>
    </ul>
</div>

<!-- Login section -->
<div class="login">
    <img class="miffy" src="images/pinkMiffy.png" width="350" height="350" alt="logo image" style="float: left;">
    <form action="complete.php" method="POST">
        <label for="firstname">Please Enter Username:</label><br><br>
        <input type="text" name="username" id="firstname" placeholder="Username" required><br><br>
        <label for="password">Please Enter Password:</label><br><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br><br>
        <input type="submit" id="submit" value="Signup">
    </form>
    <!-- Clear the float -->
    <div style="clear: both;"></div>
</div>
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "taskme";
//
//$connec = new mysqli($servername, $username,$password, $dbname);
//
//if(connec -> connect_error){
//    die("Connection failed" . $connec->connect_error);
//}
//
//$user_name = $_POST['Username'];
//$F_name = $_POST['Firstname'];
//$L_name = $_POST['Lastname'];
//$age = $_POST['Age'];
//$password = $_POST['Password'];
//$email = $_POST['email'];
//
//$sql = "INSERT INTO login (username, password, email) values ('$user_name', '$F_name', 'L_name', '$age', '$password', '$email')";
//
//if($connec->query($sql) === true){
//
//}
//else{
//    echo "error" . $sql . "<br>" . $connec->error;
//
//}
//
//$connec->close();
?>
</body>
</html>

