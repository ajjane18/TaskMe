<?php
function printTasks($status, $connection) {
try {
$sql = "SELECT opt, Type, Date FROM task WHERE opt = :opt";
$statement = $connection->prepare($sql);
$statement->bindParam(':opt', $status, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
echo "<p>Type: " . $row['opt'] . " Task: " . $row['Type'] . " - Due Date: " . $row['Date'] . "</p>";
}
} catch (PDOException $error) {
//echo $sql . "<br>" . $error->getMessage();
}
}
?>
