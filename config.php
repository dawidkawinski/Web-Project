<?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'practice';
        
        $connect = mysqli_connect("$host", "$user", "$pass");
        
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8 COLLATE utf8_general_ci";
        if (!mysqli_query($connect, $sql_create_db)) {
            die("Creating database failed: " . mysqli_error($connect));
        }

        mysqli_select_db($connect, $dbname);
        mysqli_set_charset($connect, "utf8");

        $sql_create_table = "CREATE TABLE IF NOT EXISTS users (id INT(11) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, message TEXT NOT NULL);";

        if (!mysqli_query($connect, $sql_create_table)) {
            die("Creating table failed: " . mysqli_error($connect));
        }
    ?>