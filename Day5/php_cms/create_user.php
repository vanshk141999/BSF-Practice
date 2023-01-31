<?php require_once("./includes/session.php") ?>
<?php confirm_logged_in() ?>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php

    include_once("./includes/form_functions.php");


        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT * FROM users WHERE username = '{$username}'";

        $found_username = mysqli_query($connection, $query);
        if(mysqli_num_rows($found_username)){
            header("Location: new_user.php?create=0");
            // while($found_user = mysqli_fetch_array($result)){
            // if(password_verify($password,$found_user['hashed_password'])){

            // $_SESSION['user_id'] = $found_user['id'];
            // $_SESSION['username'] = $found_user['username'];


            // header("Location: staff.php");
            // exit;
            // }
            // else{
            //     header("Location: login.php?login=0");
            //     exit;
            // }
        }
        else{
            $query = "INSERT INTO users(
                username, hashed_password
            ) VALUES (
                '{$username}', '{$hashed_password}'
            )";

            $result = mysqli_query($connection, $query); 
                if(!$result){
                    die("Database connection failed:".mysqli_error());
                }
                else{
                    header("Location: new_user.php?create=1");
                    exit;
                }
        }

?>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
    
?>