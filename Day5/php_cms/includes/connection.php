<?php require_once("constants.php") ?>
<?php

    $connection = mysqli_connect(DB_SERVER,DB_USER,"");
    if(!$connection){
        die("Database connection failed:".mysqli_error());
    }

    $db_select = mysqli_select_db($connection, DB_NAME);
    if(!$db_select){
        die("Database connection failed:".mysqli_error());
    }

?>