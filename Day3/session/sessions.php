<?php
//should be at the top of the file
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                clifford: '#da373d',
            }
            }
        }
        }
    </script>
    <title>Sessions</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
        //Cookies are not secure enough as the user can duplicate the cookies
        //We use combination of cookies and sessions
        // Session is file stored on web server and we can store more information
        $_SESSION["fname"] = "Vansh";
        $_SESSION["lname"] = "Kapoor";

        $name = "Hello {$_SESSION["fname"]} {$_SESSION["lname"]}";
        echo $name;
    ?>
</div>
</body>
</html>