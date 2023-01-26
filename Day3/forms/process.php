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
    <title>Form Process</title>
</head>
<body>
<div class="flex items-center justify-center h-[100vh]">
    <?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Username: {$username}<br>Password: {$password}";

    ?>
</div>
</body>
</html>