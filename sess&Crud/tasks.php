<?php
global $connection;
require_once('sess&Crud/config.php');
require_once ('index.php');

function escape($data) {
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

function printTasks($status, $connection) {
    try {
        $sql = "SELECT idTask, opt, Type, Date FROM task WHERE opt = :opt";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':opt', $status, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();

        if (isset($_POST['newTask'])) {
            if ($result && $statement->rowCount() > 0) {
                ?>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Type</th>
                        <th>Task</th>
                        <th>Due Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $row) : ?>
                        <tr>
                            <td><?php echo escape($row["idTask"]); ?></td>
                            <td><?php echo escape($row["opt"]); ?></td>
                            <td><?php echo escape($row["Type"]); ?></td>
                            <td><?php echo escape($row["Date"]); ?></td>
                            <td><a href="index.php?id=<?php echo escape($row["idTask"]); ?>">Edit</a></td>
                            <td>
                                <a href="#" id="<?php echo escape($row["idTask"]); ?>"
                                   onclick="return confirm('Are you sure you want to delete this task?')">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php
            } else {
                // Handle case when no tasks are found
                // echo $sql . "<br>" . $error->getMessage();
            }
        }
    } catch (PDOException $error) {
        // Handle database error
        // echo $sql . "<br>" . $error->getMessage();
    }
}
?>
