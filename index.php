<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Todo App</h2>

<form action="add.php" method="POST">
    <input type="text" name="task" placeholder="Enter task" required>
    <button type="submit">Add</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Task</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM tasks");

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['task_name']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="update_status.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']; ?>">
            Mark
        </a>
        |
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        |
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>