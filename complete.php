<?php
include('template/header.php');
require('sess&Crud/config.php');
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome page</title>
        <link rel="stylesheet" href="css/signup.css?v=<?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
    </head>
    <body>

    <?php
    require "header.php" ?>


    <div class="welcomePage">
        <h2 id="welcome">WELCOME TO TASKEME! <?php echo $_POST['username']; ?> </h2>


        <img src="images/yellowMiffey.png" width="350" height="350" alt="Welcome image">
    </div>

    </body>
    </html>

<?php
include "template/footer.php";
?>