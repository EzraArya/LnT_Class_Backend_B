<?php 
    session_start();

    if ($_POST['action'] == "register") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['USERNAME'] = $username;
        $_SESSION['PASSWORD'] = $password;

        header("Location: home.php");
    }

    if ($_POST['action'] == "login") {
        // Mengambil data dari session
        $username = $_SESSION['USERNAME'];
        $password = $_SESSION['PASSWORD'];

        // Validasi username
        if ($_POST['username'] != $username) {
            $_SESSION['ERROR'] = "Incorrect username";
            header(header: "Location: login.php");
            exit();
        }

        // Validasi password
        if ($_POST['password'] != $password) {
            $_SESSION['ERROR'] = "Incorrect password";
            header(header: "Location: login.php");
            exit();
        }

        header("Location: home.php");
    }
?>