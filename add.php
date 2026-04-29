<?php
include('db.php');

$task = $_POST['task'];

mysqli_query($conn, "INSERT INTO tasks (task_name) VALUES ('$task')");

header("Location: index.php");
?>