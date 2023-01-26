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
    <title>Read Cookies</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
    if(isset($_COOKIE['test'])){
        $var1 = $_COOKIE['test'];
        echo $var1;
    }

    //this will delete the cookie
    //this program will first set the value of $var1 from the cookies.php and then delete it. If we refresh the page then $var will be undefined
    setcookie("test", 0, time()-(60*60*24*7)); //current time + 1 week


    ?>
</div>
</body>
</html>