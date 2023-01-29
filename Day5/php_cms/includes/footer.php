<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
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
    <footer class="text-center p-2 text-[#D3D3D4]">
        <p class="text-sm">
        &copy;Copyright<?php echo date("Y")?>, Widget Corp.
        </p>
    </footer>
</body>
</html>
<?php

    //5. Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }
?>