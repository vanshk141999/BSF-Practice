<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <link rel="stylesheet" href="./stylesheets/index.css">
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
    <?php

        require_once("./includes/header.php")

    ?>
    <div class="flex flex-row h-[100%] w-[100%]">
        <div class="bg-black text-white h-[100vh] w-[20%]">

        
    
        </div>
        <div class="bg-[#FFB3A7] h-[100vh] w-[80%]">
        
         

        </div>
    </div>
    <?php

        require_once("./includes/footer.php")

    ?>
</body>
</html>