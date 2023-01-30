<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php include("./includes/header.php") ?>
<?php find_selected_page(); ?>
<div class="flex flex-row h-[100%] w-[100%] whitespace-nowrap">
    <div class="sticky bg-[#15202B] text-white h-[100vh] w-fit text-[#D3D3D4] pr-8 overflow-auto">
        <ul class="top-10 z-50 mt-10 ml-2">
                <?php public_nav_menu($connection, $selected_subj, $selected_page) ?>
        </ul>
    </div>
    <div class="bg-[#1D2A35] h-[100vh] w-full p-8 text-[#D3D3D4]">
        <?php

            if(isset($selected_page)){
            $page_by_id = get_all_pages($connection,NULL,$selected_page);
                if($selected_page = mysqli_fetch_array($page_by_id)){
                    echo "<h1 class=\"text-4xl text-[#00A86C]\">".$selected_page['menu_name']."</h1>";
                    echo "<p class=\"my-2\">".$selected_page['content']."</p>";
                }
            }elseif(isset($selected_subj)){
                if(isset($selected_subj)){
                    $subject_by_id = get_all_subjects($connection,$selected_subj,NULL);
                    if($selected_subject = mysqli_fetch_array($subject_by_id)){
                        echo "<h1 class=\"text-4xl text-[#00A86C]\">".$selected_subject['menu_name']."</h1>";
                    }
                 }
                }
            else{
                echo "<h1 class=\"text-4xl\">Welcome to Widget Corp.</h1>";
            }
        ?>
    </div>
</div>
<?php require("./includes/footer.php") ?>