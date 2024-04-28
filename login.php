<?php
include "sess&Crud/session.php";
?>

<!DOCTYPE html>
<!-- Rest of your login page HTML -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginCss.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navBar.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>

<div class = "container">
<img class="miffy" src="images/pinkMiffy.png" width="350" height="350" alt="logo image" style="float: left;">
<!-- Login section -->
<div class="login">

    <form action="complete.php" method="POST">
        <label for="username">Please Enter Username:</label><br><br>
        <input type="text" name="username" id="username" placeholder="username" required><br><br>
        <label for="password">Please Enter Password:</label><br><br>
        <input type="password" name="password" id="password" placeholder="password" required><br><br>
        <input name= "newUsr" type="Submit" id="Submit" value="Submit">
    </form>
    <!-- Clear the float -->
    <div style="clear: both;"></div>
</div>
</div>

</body>
</html>

<?php
include "template/footer.php";
?>
