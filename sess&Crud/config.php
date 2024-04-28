<?php
global $sql, $conn;
$host = "localhost";
$username = "root";
$password = "";
$dbname = "taskMe";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

require_once('sess&Crud/tasks.php');
$connection = new PDO("mysql:host=$host", $username, $password, $options); // Your database connection logic here

class tasks {

    public function displayTasks($status, $connection) {
        // Call the global function printTasks with the connection
        printTasks($status, $connection);
    }
}
?>

<!--When user submits the information creates a new user (FOR GUEST)-->
<?php if (isset($_POST['signIn'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $new_user = array(
            "user_name" => $_POST['username'],
            "full_name" => $_POST['fullname'],
            "age"       => $_POST['age'],
            "passW"     => $_POST['password'],
            "email"     => $_POST['email']
        );

        //Creating a variable which includes a method for script writing(executes code)
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "guest",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }

        //Although, catches an error if there is one
    catch(PDOException $error) {
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
                "opt"    => $_POST['list'],
                "Type"   => $_POST['Type'],
                "Date"   => $_POST['dueDate']
        );

        //Creating a variable which includes a method for script writing(executes code)
        $sql = sprintf("INSERT INTO %s (%s) values (:opt,:Type,:Date)", "task",
            implode(", ", array_keys($new_task)),
            ":" . implode(", :", array_keys($new_task)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_task);
    }

        //Although, catches an error if there is one
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>



<!--For login form-->
<?php
if (isset($_POST['newUsr'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $old_user = array(
            "user_name" => $_POST['username'],
            "passW" => $_POST['password']
        );

        // Check if username already exists
        $sql = "SELECT user_name, passW FROM guest WHERE user_name = :username";
        $statement = $connection->prepare($sql);
        $statement->execute(array(':username' => $old_user['user_name']));

        // Insert user data into 'users' table
        if ($statement->rowCount() === 0) {
            // Insert user data into 'users' table
            $sql_insert = sprintf(
                "INSERT INTO %s (%s) VALUES (:username, :password)",
                "users",
                implode(", ", array_keys($old_user))
            );

            $statement_insert = $connection->prepare($sql_insert);
            $statement_insert->bindParam(':username', $old_user['user_name']);
            $statement_insert->bindParam(':password', $old_user['passW']);
            $statement_insert->execute();

            //echo "User data inserted successfully!";
        } else {
            //echo "Username already exists. Data not inserted.";
        }
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

