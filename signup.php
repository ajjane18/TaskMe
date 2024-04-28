<?php
//Include php file for the database
require_once('sess&Crud/config.php');
require_once ('sess&Crud/session.php');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SignUp Page</title>
        <link rel="stylesheet" href="css/navBar.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/signup.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/buttons.css?v=<?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <!--adding an image-->
        <img src="images/pinkMiffy.png" width="350" height="350" alt="logo image">


            <form action= "complete.php" method="post" class = "sign">

                <label for = "username"> Please Enter Username:</label>
                <br><br>
                <input type="text" name = "username" id = "username" placeholder = "username" required>
                <br><br>

                <label for = "fullname"> Please Enter your Full name:</label>
                <br><br>
                <input type="text" name = "fullname" id = "fullname" placeholder = "fullname" required>
                <br><br>

                <label for = "age"> Please Enter your age:</label>
                <br><br>
                <input type="number" name = "age" id ="age" placeholder = "age" required>
                <br><br>

                <label for = "password"> Please Enter Password:</label>
                <br><br>
                <input type="password" name = "password" id ="password" placeholder = "password" required>
                <br><br>

                <label for = "email"> Please Enter your email:</label>
                <br><br>
                <input type="email" name = "email" id ="email" placeholder = "email" required>
                <br><br>

                <button name="signIn" value="Login" class="button" type="submit">Sign in</button>
            </form>
    </body>
    </html>
<?php
include "template/footer.php";
?>