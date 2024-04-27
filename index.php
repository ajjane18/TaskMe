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


// Include config file
require_once 'config.php';

// Create task operation
if (isset($_POST['submit'])) {
    try {
        $conn = new PDO($dsn, $username, $password, $options);

        $new_task = array(
            "Type" => $_POST['Type'],
            "DueDate" => $_POST['DueDate']
        );

        $sql = sprintf(
            "INSERT INTO Task (Type, DueDate) VALUES (:Type, :DueDate)"
        );

        $statement = $conn->prepare($sql);
        $statement->execute($new_task);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

// Read task operation
try {
    $conn = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM Task";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

// Update operation
if (isset($_POST['update'])) {
    try {
        $conn = new PDO($dsn, $username, $password, $options);

        $updated_task = array(
            "id" => $_POST['id'],
            "Type" => $_POST['Type'],
            "DueDate" => $_POST['DueDate']
        );

        $sql = "UPDATE Task SET Type = :Type, DueDate = :DueDate WHERE id = :id";

        $statement = $conn->prepare($sql);
        $statement->execute($updated_task);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

// Delete operation
if (isset($_POST['delete'])) {
    try {
        $conn = new PDO($dsn, $username, $password, $options);

        $id = $_POST['id'];
        $sql = "DELETE FROM Task WHERE id = :id";

        $statement = $conn->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}


include "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/navBar.css?v=<?php echo time(); ?>">

    <script type = "text/javascript" src= "js/index.js"></script>
    <script src="https://kit.fontawesome.com/56e41c8709.js" crossorigin="anonymous"></script>
</head>
<body>

<br><br><br>

<h1 id="cal">Calendar</h1>

<div class="calendar">
    <div class="month">
        <ul>
            <li class="prev"><</li>
            <li class="next">></li>
            <li id="current-month"></li>
        </ul>
    </div>
    <ul class="week">
        <li>Mon</li>
        <li>Tue</li>
        <li>Wed</li>
        <li>Thu</li>
        <li>Fri</li>
        <li>Sat</li>
        <li>Sun</li>
    </ul>
    <ul class="days" id="calendar-days">
    </ul>
</div>

<h1 id="task">Tasks</h1>

<form method="post">
    <div class="container">
<!--Creating a label for task input with options-->
        <label for="type">Type</label>
        <select id="list">
            <option value="To-Do">To-Do</option>
            <option value="Doing">In-Progress</option>
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

    <div class = taskContent>
    <div class="to-doCon">
        <h3>TO-DO</h3>

        <br>
        <div class = "content1">

        </div>

    </div>

    <div class="DoingCon">
        <h3>IN-PROGRESS</h3>

        <br>
        <div class = "content2">

        </div>

    </div>

    <div class="DoneCon">
        <h3>COMPLETE</h3>

        <br>
        <div class = "content3">

        </div>

    </div>
    </div>

    <div class="Upcoming">
        <h3>UPCOMING EVENTS</h3>
        <br>
        <div class = "content4">
        </div>

    </div>

</form>
</body>
</html>

<?php
include "footer.php";
?>