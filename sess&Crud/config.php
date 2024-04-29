<?php
global $sql, $conn;
$host = "localhost";
$username = "root";
$password = " ";
$dbname = "taskMe";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

require_once('sess&Crud/tasks.php');
$connection = new PDO("mysql:host=$host", $username, $password, $options);

class tasksMaker {

    public function displayTasks($status, $connection) {
        // Call the global function printTasks with the connection
        printTasks($status, $connection);
    }
}
?>

<!--When user submits the information creates a new user (FOR GUEST)-->
<?php
if (isset($_POST['newUsr']) || isset($_POST['signIn'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);

        // Common user data
        $user_data = array(
            "user_name" => $_POST['username'],
            "passW" => $_POST['password']
        );

        // Check if username already exists in the "guest" table
        $sql_check_guest = "SELECT user_name FROM guest WHERE user_name = :username";
        $statement_check_guest = $connection->prepare($sql_check_guest);
        $statement_check_guest->execute(array(':username' => $user_data['user_name']));

        // Insert user data into "users" table if not already present
        if ($statement_check_guest->rowCount() === 0) {
            $sql_insert_users = sprintf(
                "INSERT INTO %s (%s) VALUES (:username, :password)",
                "users",
                implode(", ", array_keys($user_data))
            );
            $statement_insert_users = $connection->prepare($sql_insert_users);
            $statement_insert_users->bindParam(':username', $user_data['user_name']);
            $statement_insert_users->bindParam(':password', $user_data['passW']);
            $statement_insert_users->execute();
            //echo "User data inserted successfully into 'users' table!";
        } else {
            //echo "Username already exists in 'guest' table. Data not inserted.";
        }

        // Insert user data into "guest" table
        $new_user_data = array(
            "user_name" => $_POST['username'],
            "full_name" => $_POST['fullname'],
            "age" => $_POST['age'],
            "passW" => $_POST['password'],
            "email" => $_POST['email']
        );
        $sql_insert_guest = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            "guest",
            implode(", ", array_keys($new_user_data)),
            ":" . implode(", :", array_keys($new_user_data))
        );
        $statement_insert_guest = $connection->prepare($sql_insert_guest);
        $statement_insert_guest->execute($new_user_data);
        //echo "User data inserted successfully into 'guest' table!";
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<?php
// Check if the form has been submitted (FOR TASK)
if (isset($_POST['newTask'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $new_task = array(
            "opt" => $_POST['list'],
            "Type" => $_POST['Type'],
            "Date" => $_POST['dueDate']
        );

        // Creating a variable which includes a method for script writing (executes code)
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (:opt, :Type, :Date)",
            "task",
            implode(", ", array_keys($new_task))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_task);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_GET["idTask"])) {
    try {
        $id = $_GET["idTask"];
        // Corrected table name from "tasks" to "task"
        $sql = "DELETE FROM task WHERE idTask = :idTask";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':idTask', $id);
        $statement->execute();
        $success = "Task " . $id . " successfully deleted";
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

// Tries to select all data from user and catches an error if there is one
try {
    $sql = "SELECT * FROM task WHERE idTask = :idTask";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>




