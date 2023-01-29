<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php

    $menu_name = $_POST['menu_name'];
    $position = $_POST['position'];
    $visibility = $_POST['visible'];

    $query = "INSERT INTO subjects(
                menu_name, position, visible
            ) VALUES (
                '{$menu_name}', {$position}, {$visibility}
            )";

    $result = mysqli_query($connection, $query); 
    if(!$result){
        die("Database connection failed:".mysqli_error());
    }
    else{
        header("Location: new_subject.php");
        exit;
    }

?>

<?php

    //5. Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
?>