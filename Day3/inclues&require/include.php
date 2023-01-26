<?php

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
    <title>Include</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
        // include("included_func.php");
        // require("included_func.php"); //does the same job but throws an error when the file is not found and stop the program from execution
        include_once("included_func.php"); //require the file only once if we add inclue after that then it will throw an error
        // include("included_func.php");
        

    ?>
</div>
</body>
</html>