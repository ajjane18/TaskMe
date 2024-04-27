<?php
global $connection;
include ('./header.php');
require('./config.php');
// Create an instance of the tasks class with the PDO object as the argument
$tasks = new tasks();
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

<!-- Separating the title from the main body!-->
<br><br>
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
        <img src="images/purpleMiffy.png" width="95%" height="80%" alt="logo image">
    </ul>
</div>

<!-- separating the main contents of the page-->

<br><br><br>

<section>

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
        <label for="options">Type</label>
        <select id="list" name = "list">
            <option value="To-Do">To-Do</option>
            <option value="In-Progress">In-Progress</option>
            <option value="Complete">Complete</option>
        </select>

        <!--Creating a label for type of task-->
        <label for="Type">Task</label>
        <input type="text" id="Type" name="Type">

        <!--Creating a label for due date-->
        <label for="dueDate">Due date</label>
        <input type="date" id="dueDate" name="dueDate">

        <!--Creating a submit button for user to input the data-->
        <button name="newTask" value="Login" class="button" type="submit">Submit</button>
    </div>
</form>

    <div class = taskContent>
        <div class="to-doCon">
            <h3>TO-DO</h3>
            <br>
            <div class = "content1">
                <?php
                $tasks->displayTasks('To-Do',$connection);
                ?>
            </div>

        </div>
        <div class="DoingCon">
            <h3>IN-PROGRESS</h3>
            <br>
            <div class = "content2">
                <?php
                $tasks->displayTasks('In-Progress',$connection);
                ?>
            </div>

        </div>
        <div class="DoneCon">
            <h3>COMPLETE</h3>
            <br>
            <div class = "content3">
                <?php
                $tasks->displayTasks('To-Do', $connection);
                ?>
            </div>

        </div>


        <div class="Upcoming">
        <h3>UPCOMING EVENTS</h3>
        <br>
        <div class = "content4">
        </div>

    </div>
    </div>
</section>
</body>
</html>

<?php
include "footer.php";
?>