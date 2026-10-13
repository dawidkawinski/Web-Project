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
        <form id="myForm" action="action.php" method="POST">
            <span id="nameError" style="color: red; display: none;">Enter username:</span>
            <input type="text" id="name" name="name" placeholder="Your Name">
            
            <span id="emailError" style="color: red; display: none;">Enter email:</span>
            <input type="text" id="email" name="email" placeholder="Your Email">

            <span id="messError" style="color: red; display: none;">Enter message:</span>
            <input type="text" id="message" name="message" placeholder="Your Message">
            <div class="buttons">
                <button type="submit" class="btn btn-add" name="add">Add User</button>
                <a href="index.php" class="btn btn-cancel">Cancel</a>
            </div>
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>