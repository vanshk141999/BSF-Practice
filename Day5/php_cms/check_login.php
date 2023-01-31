<?php require_once("./includes/session.php") ?>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php 
    include_once("./includes/form_functions.php");

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $query = "SELECT * FROM users WHERE username = '{$username}'";

        $result = mysqli_query($connection, $query); 

        if($result){
            while($found_user = mysqli_fetch_array($result)){
            if(password_verify($password,$found_user['hashed_password'])){

            $_SESSION['user_id'] = $found_user['id'];
            $_SESSION['username'] = $found_user['username'];


            header("Location: staff.php");
            exit;
            }
            else{
                header("Location: login.php?login=0");
                exit;
            }
        }
        }

?>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
    
?>