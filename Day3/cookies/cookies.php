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
    <title>Cookies</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
        //setcookie($name, $value, $expireTime(unix timestamp))
        //we can delete the cookie by setting its value to nothing/setting expiration to past
        setcookie("test", 45, time()+(60*60*24*7)); //current time + 1 week

    ?>
</div>
</body>
</html>