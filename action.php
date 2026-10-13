<?php

require_once 'config.php';

//add button
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($connect, "INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message')");

    header("Location: index.php");
}

//delete button
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM users WHERE id = $id");
    
    header("Location: index.php");
}

//edit button
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($connect, "UPDATE users SET name = '$name', email='$email', message='$message' WHERE id = $id");
    
    header("Location: index.php");
}

?>