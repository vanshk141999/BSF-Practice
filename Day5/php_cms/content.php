<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php include("./includes/header.php") ?>
<div class="flex flex-row h-[100%] w-[100%] whitespace-nowrap">
    <div class=" bg-[#15202B] text-white h-[100vh] w-fit text-[#D3D3D4] pr-4">
    <ul class="sticky top-10 z-50 mt-10 ml-2">
        <li class="my-2 mb-8 text-emerald-400"><a href="">+ Add a New Subject</a></li>
            <?php

                //3. Perform Database query
                $subject_set = mysqli_query($connection,"SELECT * FROM subjects"); //result will be known as resource which contains all the rows from database
                if(!$subject_set){
                    die("Database connection failed:".mysqli_error());
                }

                //4. Use returned Data
                while($subject = mysqli_fetch_array($subject_set)){
                    echo "<h2 class=\"mb-2 mt-8 text-xl\"".">".$subject["menu_name"]."</h2>";

                        //3. Perform Database query
                        $page_set = mysqli_query($connection,"SELECT * FROM pages WHERE subject_id = {$subject["id"]}"); //result will be known as resource which contains all the rows from database
                        if(!$page_set){
                            die("Database connection failed:".mysqli_error());
                        }
        
                        //4. Use returned Data
                        while($page = mysqli_fetch_array($page_set)){
                            echo "<li class=\"mt-1\"><a href=\"content.php\">> ".$page["menu_name"]."</a></li>";
                        }
                }

            ?>
        <li class="my-2 mt-8 text-red-400"><a href="staff.php"><- Back to Main Menu</a></li>
    </ul>
    </div>
    <div class="bg-[#1D2A35] h-[100vh] w-full p-8 text-[#D3D3D4]">
        <h1 class="text-4xl">Select a Subject/Page to Edit</h1>
    </div>
</div>
<?php require("./includes/footer.php") ?>