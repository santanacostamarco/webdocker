<?php

    $conn = mysqli_connect("mysql", $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASS"], $_ENV["MYSQL_DB_NAME"]);

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    echo phpinfo();
    
?>