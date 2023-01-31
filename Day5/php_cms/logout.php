<?php //require_once("./includes/session.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php

    //four steps for closing a SESSION

    //1.Find a session
    session_start();

    //2.Unset all the session variales
    $_SESSION = array();

    //3.Destroy the session cookie
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-42000, '/');
    }

    //4.Destroy the session
    session_destroy();

    header("Location: login.php?logout=1");

?>