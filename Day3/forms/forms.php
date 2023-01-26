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
        <div class="p-4 border">
        <form action="process.php" method="post" class="flex gap-4 flex-col items-center justify-center">
            <input type="text" name="username" placeholder="Username" class="rounded-md outline-none p-2 drop-shadow-md">
            <input type="password" name="password" placeholder="Password" class="rounded-md outline-none p-2 drop-shadow-md">
            <input type="submit" value="Submit" name="Submit" class="border p-2 rounded-md">
        </form>
        <div>
    </div>
</body>
</html>