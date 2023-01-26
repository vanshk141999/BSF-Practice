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
    <title>Include</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
        function printName() {
            echo "Vansh";
        }

        printName();
    ?>
</div>
</body>
</html>