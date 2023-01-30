<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php find_selected_page(); ?>
<?php

    // echo $selected_subj['menu_name'];

    $page = $_GET['page'];
    $menu_name = ucfirst(
        mysqli_real_escape_string($connection, $_POST['menu_name'])
    );
    $position = $_POST['position'];
    $visible = $_POST['visible'];
    $content = mysqli_real_escape_string($connection, $_POST['content']);

    if($visible == 0){
        $subj = 1; 
    }

    $query = "UPDATE pages SET 
                menu_name = '{$menu_name}', 
                position = {$position}, 
                visibility = {$visible}, 
                content = '{$content}'
                WHERE id={$page}";
    
    $result = mysqli_query($connection, $query); 
    if(mysqli_affected_rows($connection)==1){
        header("Location: edit_page.php?page={$page}&update=1");
        exit;
    }
    else{
        header("Location: edit_page.php?page={$page}&update=0");
        exit;
    }

?>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
    
?>