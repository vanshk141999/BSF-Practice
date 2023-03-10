<?php require_once("./includes/session.php") ?>
<?php require_once("constants.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widget Corp.</title>
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
        function hideMessage(){
            document.getElementById("close-update-message").classList.add("hidden");
        }
    </script>
</head>
<body class="bg-[#0D1721]">
    <header class="sticky top-0 z-50 bg-[#0D1721]">
        <div class="flex flex-row justify-between items-center mx-4 my-2 text-white">
            <div class="text-2xl">
                <a href="<?php echo uri; ?>">WIDGET CORP.</a>
            </div>
            <div>
                <?php if(!logged_in()){
                    echo "<a class=\"mr-2 text-emerald-400\" href=\"login.php\">Login</a>";} 
                    else{
                    echo "<a class=\"mr-2 text-emerald-400\" href=\"staff.php\">Dashboard</a>";
                    echo "<a class=\"mr-4 text-[red]\" href=\"logout.php\">Logout</a>";}
                    ?>
                <?php
                    $date = date('d-m-y');
                    echo "DATE: ".$date;
                ?>
            </div>
        </div>
    </header>
</body>
</html>