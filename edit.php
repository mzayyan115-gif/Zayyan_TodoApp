<?php
include('db.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="text" name="task" value="<?php echo $data['task_name']; ?>">
    <button type="submit">Update</button>
</form>