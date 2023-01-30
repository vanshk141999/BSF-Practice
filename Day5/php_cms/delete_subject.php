<head>
    <script>
        function
    </script>
</head>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php

    $id = $_GET['subj'];
    echo $id;

    $query = "DELETE FROM subjects 
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