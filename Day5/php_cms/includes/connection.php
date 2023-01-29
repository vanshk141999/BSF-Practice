<?php require_once("constants.php") ?>
<?php

    //1. Create a Database Connection
    $connection = mysqli_connect(DB_SERVER,DB_USER,""); //returns a handle to connection
    if(!$connection){
        die("Database connection failed:".mysqli_error());
    }

    // //2. Select the Database
    $db_select = mysqli_select_db($connection, DB_NAME);
    if(!$db_select){
        die("Database connection failed:".mysqli_error());
    }

?>