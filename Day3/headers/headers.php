<?php
//header must be always at the top
//this is how we redirect to a page(this is the main usage of header)
    header("Location: index.html");
    exit
//     this is how we show 404 error
//     header("HTTP/1.1 404 Not Found");
//     exit;
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
    <title>Headers</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
        
    ?>
</div>
</body>
</html>