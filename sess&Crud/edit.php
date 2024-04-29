<?php
global $connection;
if (isset($_POST['submitUp'])) {
    try {
        $up_task = array(
            "idTask" => $_POST['idTask'],
            "opt" => $_POST['list'],
            "Type" => $_POST['Type'],
            "Date" => $_POST['dueDate']
        );

        $sql = "UPDATE tasks SET idTask = :idTask, 
                 opt = :opt, Type = :Type, Date = :dueDate 
                    WHERE idTask = :idTask";

        $statement = $connection->prepare($sql);
        $statement->execute($up_task);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_GET['idTask'])) {
    try {
        $id = $_GET['idTask'];
        $sql = "SELECT * FROM users WHERE idTask = :idTask";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
?>

<?php require "template/header.php"; ?>

    <!--Allows user to edit anything but the ID-->
<?php if (isset($_POST['submitUp']) && $statement) : ?>
    <?php echo escape($_POST['idTask']); ?> successfully updated.
<?php endif; ?>
    <h2>Edit a Task</h2>
    <form method="post">
        <?php foreach ($up_task as $key => $value) : ?>
            <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
            <input type="text" name="<?php echo $key; ?>" id="<?php echo $key;
            ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'idTask' ?
                'readonly' : null); ?>>
        <?php endforeach; ?>
        <input type="submit" name="submitUp" value="Submit">
    </form>
    <a href="../index.php">Back to home</a>
<?php require "template/footer.php"; ?><h1 id="task">Tasks</h1>

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
            $tasks->displayTasks('Complete', $connection);
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

