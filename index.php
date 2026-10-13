<?php 

require_once 'config.php';

$users = mysqli_query($connect, "SELECT id, name, email, message FROM users")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>User Table</h1>
        <a href="add.php" class="btn-add">Add User</a>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
                <?php 
                while ($user = mysqli_fetch_assoc($users)) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['message'] ?></td>
                        <td>
                            <a href="edit.php" class="btn-edit">Edit</a>
                            <a class="btn-delete">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>

    </div>
    
</body>
</html>