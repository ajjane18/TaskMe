<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="TaskMe%20Project/css/loginCss.css">
    <link rel="stylesheet" type="text/css" href="css/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
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
        <li><a href= "Account.php"><i class="fa-solid fa-user" style="color: #161925;"></i>Account</a></li>
    </ul>
</div>

<div class = "login">

    <!--adding an image-->
    <img src="images/pinkMiffy.png" width="350" height="350" alt="logo image">

<form action="complete.php" method="POST" >

    <label for = "firstname"> Please Enter Username:</label>
    <br><br>
    <input type="text" name = "username" id = "firstname" placeholder = "Username" required>
    <br><br>

    <label for = "password"> Please Enter Password:</label>
    <br><br>
    <input type="password" name = "password" id ="password" placeholder = "Password" required>
    <br><br>

    <label for = "email"> Please Enter your email:</label>
    <br><br>
    <input type="email" name = "email" id ="email" placeholder = "email" required>
    <br><br>

    <input type="submit" id = "submit" value="Signup">

</form>

</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
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
</body>
</html>

