<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1 class='add-header'>Add User</h1>
        <form  action="action.php" method="POST">
            <input type="text" name="name" placeholder="Your Name">
            <input type="text" name="email" placeholder="Your Email">
            <input type="text" name="message" placeholder="Your Message">
            <div class="buttons">
                <button type="submit" class="btn btn-add" name="add">Add User</button>
                <a href="index.php" class="btn btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
    
</body>
</html>