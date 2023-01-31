<head>
    <script>
        function
    </script>
</head>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php require_once("./includes/session.php") ?>
<?php confirm_logged_in() ?>
<?php

    $id = $_GET['page'];
    echo $id;

    $query = "DELETE FROM pages 
                WHERE id={$id};";

    $result = mysqli_query($connection, $query); 
    if(!$result){
        die("Database connection failed:".mysqli_error());
    }
    else{
        header("Location: content.php");
        exit;
    }

?>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
    
?>