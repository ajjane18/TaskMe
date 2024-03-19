<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="css/navBar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/signup.css?v=<?php echo time(); ?>">

    <script type = "text/javascript" src= "js/login.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
include "header.php";
?>

<div class = "sign">

    <!--adding an image-->
    <img src="images/pinkMiffy.png" width="350" height="350" alt="logo image">

    <div class = "usrInput">
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

<?php
include "footer.php";
?>
