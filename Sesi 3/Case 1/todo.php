<?php 
    session_start();

    $tasks = $_SESSION['TASKLIST'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To-Do</h1>

    <form action="request.php" method="post">
        <input type="text" name="task-name">
        <button type="submit">Add Task</button>
    </form>

    <h1>Task</h1>

    <ol>
        <?php 
            foreach($tasks as $task) {
                echo "<li>$task</li>";
            }
        ?>
    </ol>
</body>
</html>