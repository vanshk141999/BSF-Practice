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
    <header class="flex flex-row justify-between items-center mx-4 my-2">
        <div class="text-2xl">
            WIDGET CORP
        </div>
        <div>
            <?php
            
            $date = date('d-m-y');
            echo "DATE: ".$date;

            ?>
        </div>
    </header>
</body>
</html>