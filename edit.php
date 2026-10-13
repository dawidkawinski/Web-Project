<?php
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1 class='add-header'>Edit User</h1>

        <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $users = mysqli_query($connect, "SELECT id, name, email, message FROM users WHERE id = $id");
                $user = mysqli_fetch_assoc($users);

                $id = $user['id'];
                $name = $user['name'];
                $email = $user['email'];
                $message = $user['message'];
            }
        ?>

        <form id="myForm" action="action.php" method="POST">
            <input type="hidden" name="id" value="<?=$id?>">

            <span id="nameError" style="color: red; display: none;">Enter username:</span>
            <input type="text" id="name" name="name" value="<?=$name?>">

            <span id="emailError" style="color: red; display: none;">Enter email:</span>
            <input type="text" id="email" name="email" value="<?=$email?>">

            <span id="messError" style="color: red; display: none;">Enter message:</span>
            <input type="text" id="message" name="message" value="<?=$message?>">

            <div class="buttons">
                <button type="submit" class="btn btn-edit" name="edit">Edit User</button>
                <a href="index.php" class="btn btn-cancel">Cancel</a>
            </div>
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>