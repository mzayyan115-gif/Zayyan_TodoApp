<?php
include('db.php');

$id = $_POST['id'];
$task = $_POST['task'];

mysqli_query($conn, "UPDATE tasks SET task_name='$task' WHERE id=$id");

header("Location: index.php");
?>
<?php
include('db.php');

$id = $_GET['id'];
$status = $_GET['status'];

$new_status = ($status == 'pending') ? 'completed' : 'pending';

mysqli_query($conn, "UPDATE tasks SET status='$new_status' WHERE id=$id");

header("Location: index.php");
?>