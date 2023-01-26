<?php

    //1. Create a Database Connection
    $connection = mysqli_connect("localhost","root",""); //returns a handle to connection
    if(!$connection){
        die("Database connection failed:".mysqli_error());
    }

    // //2. Select the Database
    $db_select = mysqli_select_db($connection, "widget_corp");
    if(!$db_select){
        die("Database connection failed:".mysqli_error());
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database</title>
</head>
<body>
    <?php
    
    //3. Perform Database query
    $result = mysqli_query($connection,"SELECT * FROM subjects"); //result will be known as resource which contains all the rows from database
    if(!$result){
        die("Database connection failed:".mysqli_error());
    }
    ?>

    <table border>
        <tr><th>ID</th><th>Menu Name</th><th>Position</th><th>Visible</th></tr>

    <?php

    //4. Use returned Data
    while($row = mysqli_fetch_array($result)){
        echo "<tr><td>".$row["id"]."</td><td>".$row["menu_name"]."</td><td>".$row["position"]."</td><td>".$row["visible"]."</td></tr>";
    }
    
    ?>
    </table>
</body>
</html>
<?php

    //5. Close Database connection
    mysqli_close($connection);

?>