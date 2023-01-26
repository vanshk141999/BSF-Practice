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
</head>
<body>
    <div class="flex items-center justify-center h-[100vh]">
        <?php
        //URL & Links -> GET
        //Forms -> POST
        //Cookies -> COOKIE

            echo "Home"

        ?>
        <a href="about.php?id=1">About</a>
        <!-- URL Encoder: is used to pass values like &,=, that have some meaning in the URL -->
        <a href="about.php?name=<?php echo urlencode("vansh kapoor") ?>&id=1">About</a>
        
        <!-- Before question mark we use rawurlencode and after the we use urlencode
        htmlspecialchars escapes any html that is bad for our HTML page -->

        <!-- Post strings are automatically encoded -->

    </div>
</body>
</html>