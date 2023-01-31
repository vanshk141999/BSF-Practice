<?php require_once("./includes/session.php") ?>
<?php confirm_logged_in() ?>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php find_selected_page(); ?>
<?php

    $id = $_GET['id'];
    $menu_name = ucfirst(
        mysqli_real_escape_string($connection, $_POST['menu_name'])
    );
    $position = $_POST['position'];
    $visibility = $_POST['visible'];

    if($visibility == 0){
        $subj = 1; 
    }

    $query = "UPDATE subjects SET 
                menu_name = '{$menu_name}', 
                position = {$position}, 
                visible = {$visibility} 
                WHERE id={$id}";
    
    $result = mysqli_query($connection, $query); 
    if(mysqli_affected_rows($connection)==1){
        header("Location: edit_subject.php?subj={$id}&update=1");
        exit;
    }
    else{
        header("Location: edit_subject.php?subj={$id}&update=0");
        exit;
    }

?>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
    
?>