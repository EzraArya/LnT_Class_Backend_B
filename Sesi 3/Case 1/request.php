<?php 
    session_start();
    $_SESSION["TASKLIST"][] = $_POST['task-name'];
    header("Location: todo.php");
?>