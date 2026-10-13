<?php

require_once 'config.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($connect, "INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message')");

    header("Location: index.php");
}

?>