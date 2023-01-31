<?php require_once("./includes/session.php") ?>
<?php confirm_logged_in() ?>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php

    $subj = $_GET['subj'];
    $menu_name = ucfirst(
        mysqli_real_escape_string($connection, $_POST['menu_name'])
    );
    $position = $_POST['position'];
    $visibile = $_POST['visible'];
    $content = mysqli_real_escape_string($connection,$_POST['content']);

    $query = "INSERT INTO pages(
                subject_id, menu_name, position, visibility, content
            ) VALUES (
                {$subj}, '{$menu_name}', {$position}, {$visibile}, '{$content}'
            )";

    $result = mysqli_query($connection, $query); 
    if(!$result){
        die("Database connection failed:".mysqli_error());
    }
    else{
        header("Location: new_page.php?subj={$subj}");
        exit;
    }

?>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
    
?>