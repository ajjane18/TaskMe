global$password; <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/loginCss.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navBar.css?v=<?php echo time(); ?>">

    <script type="text/javascript" src="js/login.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
include "header.php";
?>

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

// Include config file
require_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Create a PDO instance
        $conn = new PDO("mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME, Config::DB_USER, Config::DB_PASSWORD);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare and execute the SQL query to insert data into the database
        $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "New record created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close connection
    $conn = null;
}

?>
</body>
</html>

<?php
include "footer.php";
?>
