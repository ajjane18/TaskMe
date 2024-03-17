<?php
/** if (isset($_POST['submit'])) {
    require "config.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $new_user = array(
            "Task" => $_POST['Task'],
            "Due Date" => $_POST['Due Date']
        );

        $sql = sprintf("INSERT INTO Task ("Type", "Date") VALUES ("Task", "DueDate")", "users",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);


    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/navBar.css">
    <script type = "text/javascript" src= "js/index.js"></script>
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
        <li><a href= "account.php"><i class="fa-solid fa-user" style="color: #161925;"></i>Account</a></li>
    </ul>
</div>

<h1 id="cal">Calendar</h1>

<h1 id="task">Tasks</h1>

<form method="post">
    <div class="container">
<!--Creating a label for task input with options-->
        <label for="type">Type</label>
        <select id="list">
            <option value="To-Do">To-Do</option>
            <option value="Doing">Doing</option>
            <option value="Complete">Complete</option>
        </select>

        <!--Creating a label for type of task-->
        <label for="Type">Task</label>
        <input type="text" id="Type" name="Type">

        <!--Creating a label for due date-->
        <label for="Due Date">Due date</label>
        <input type="datetime-local" id="Due Date" name="Due Date">

        <!--Creating a submit button for user to input the data-->
    <input type="submit" name="submit" value="Submit">
    </div>

    <div class="to-doCon">

    </div>
</form>

</body>
</html>