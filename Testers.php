<?php
global $idTask, $idUser;
require_once 'sess&Crud/config.php';
require_once 'sess%Crud/tasks.php';
require_once 'login.php';

class TaskManager {

    public function insertTask($list, $type, $dueDate) {
        try {
            $sql = "INSERT INTO task (opt, Type, Date) VALUES (:opt, :Type, :Date)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([
                ':opt' => $list,
                ':Type' => $type,
                ':Date' => $dueDate
            ]);
            echo "Task inserted successfully.";
        } catch (PDOException $error) {
            //echo "Error inserting task: " . $error->getMessage();
        }
    }

    public function deleteTask($idTask) {
        try {
            $sql = "DELETE FROM task WHERE idTask = :idTask";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':idTask', $idTask);
            $statement->execute();
            echo "Task $idTask successfully deleted.";
        } catch (PDOException $error) {
            //echo "Error deleting task: " . $error->getMessage();
        }
    }

    public function getTaskById($idTask) {
        try {
            $sql = "SELECT * FROM task WHERE idTask = :idTask";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':idTask', $idTask);
            $statement->execute();
            $result = $statement->fetchAll();
            // Process $result as needed
        } catch (PDOException $error) {
            //echo "Error fetching task: " . $error->getMessage();
        }
    }
}

$taskManager = new TaskManager($dsn, $username, $password, $options);

// Insert a task
$taskManager->insertTask("Some task", "Type A", "2024-04-30");

// Delete a task (assuming $id is set elsewhere)
$taskManager->deleteTask($idTask);

// Retrieve data for a specific task (assuming $id is set elsewhere)
$taskManager->getTaskById($idTask);
?>


<?php
class userManager {

    public function insertUser($username, $password) {
        try {
            $sql = "INSERT INTO users (username, password) VALUES (:user_name, :passW)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([
                ':user_name' => $username,
                ':passW' => $password,
            ]);
            echo "USer inserted successfully.";
        } catch (PDOException $error) {
            //echo "Error inserting task: " . $error->getMessage();
        }
    }

    public function getTaskById($idUser) {
        try {
            $sql = "SELECT * FROM users WHERE idTask = :idTask";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':idTask', $idUser);
            $statement->execute();
            $result = $statement->fetchAll();
            // Process $result as needed
        } catch (PDOException $error) {
            //echo "Error fetching task: " . $error->getMessage();
        }
    }
}

$userManager = new userManager($dsn, $username, $password, $options);

// Insert a task
$userManager->insertUser("Jungwon", "YangYang");

// Retrieve data for a specific task (assuming $id is set elsewhere)
$userManager->getTaskById($idUser);
?>
