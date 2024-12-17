<?php 
    include("connect.php"); 

    if(isset($_POST['create'])) {
        $title = $_POST['title'];
        $studio = $_POST['studio'];
        $duration = $_POST['duration'];

        $query = "INSERT INTO movies(title, studio, duration) VALUES('$title', '$studio', $duration)";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            die("Something went wrong");
        }
    }

    if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $studio = $_POST['studio'];
        $duration = $_POST['duration'];

        $query = "UPDATE movies SET title='$title', studio='$studio', duration=$duration WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            die("Something went wrong");
        }
    }
?>