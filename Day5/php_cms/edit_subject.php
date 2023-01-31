<?php require_once("./includes/session.php") ?>
<?php confirm_logged_in() ?>
<?php include("./includes/header.php") ?>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php find_selected_page(); ?>
<div class="flex flex-row h-[100%] w-[100%] whitespace-nowrap">
    <div class="sticky bg-[#15202B] text-white h-[100vh] w-fit text-[#D3D3D4] pr-8 overflow-auto">
        <ul class="top-10 z-50 mt-10 ml-2">
            <li class="my-2 mb-8 text-emerald-400"><a href="new_subject.php">+ Add a New Subject</a></li>
                <?php nav_menu($connection, $selected_subj, $selected_page) ?>
            <li class="my-2 mt-8 text-red-400"><a href="staff.php"><- Back to Main Menu</a></li>
        </ul>
    </div>
    <div class="bg-[#1D2A35] h-[100vh] w-full p-8 text-[#D3D3D4]">
        <div class="flex flex-row justify-between items-center">
            <h1 class="text-4xl">Edit Subject: 
                <?php

                    if(isset($selected_subj)){
                    $subject_by_id = get_all_subjects($connection,$selected_subj,NULL);
                    if($selected_subject = mysqli_fetch_array($subject_by_id)){
                        echo "<span class=\"text-4xl text-[#00A86C]\">".$selected_subject['menu_name']."</span>";
                    }
                    }

                ?>
            </h1>
            <?php
            $url= "delete_subject.php?subj=".$selected_subject['id'];
            echo "<span class=\"text-[red]\"><a href=\"{$url}\">"."Delete</a></span>" ?>
        </div>
            <?php

                if(isset($_GET['update'])&&$_GET['update']==1){
                    echo "<div id=\"close-update-message\" class=\"mt-2 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 rounded-lg dark:text-gray-400 \">
                            <div class=\"inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200\">
                                <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z\" clip-rule=\"evenodd\"></path></svg>
                                <span class=\"sr-only\">Check icon</span>
                            </div>
                            <div class=\"ml-3 text-sm font-normal\">The Subject was updated successfuly!</div>
                            <button onclick=\"hideMessage()\" type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700\" data-dismiss-target=\"#toast-success\" aria-label=\"Close\">
                                <span class=\"sr-only\">Close</span>
                                <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                            </button>
                        </div>";
                }
                elseif(isset($_GET['update'])&&$_GET['update']==0){
                    echo "
                    <div id=\"close-update-message\" class=\"mt-2 flex items-center w-full     max-w-xs p-4 mb-4 text-gray-500 rounded-lg dark:text-gray-400\" role=\"alert\">
                    <div class=\"inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200\">
                        <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                        <span class=\"sr-only\">Error icon</span>
                        </div>
                        <div class=\"ml-3 text-sm font-normal\">Please change the values before updating!</div>
                        <button onclick=\"hideMessage()\" type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700\" data-dismiss-target=\"#toast-danger\" aria-label=\"Close\">
                        <span class=\"sr-only\">Close</span>
                        <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                        </button>
                </div>";
                }

            ?>
            <?php 
                $url= "update_subject.php?id=".$selected_subject['id'];
            ?>
            <form class="my-6" action="<?php echo $url ?>" method="post">
                <div class="mb-6">
                    <input name="menu_name" type="text" maxlength="18"  autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $selected_subject['menu_name'] ?>" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <select name="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <?php

                            $selected = "";
                            $subject_set = get_all_subjects($connection, NULL,NULL);
                            $subject_count = mysqli_num_rows($subject_set);
                            for($count = 1; $count <= $subject_count+1; $count++){
                                if($selected_subject['position']==$count){
                                    $selected = "selected";
                                }
                                
                                echo "<option ".$selected." value=\"$count\">".$count."</option>";
                                $selected = "";
                            }
                            
                        ?>
                    </select>
                </div>
                <div class="mb-6">
                    <fieldset>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visible</label>
                        <div class="flex items-center mb-4">
                            <input type="radio" name="visible" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                            <?php if($selected_subject['visible']==1){
                                echo "checked";} 
                            ?>
                            >
                                <label class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Yes
                                </label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input type="radio" name="visible" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                            <?php if($selected_subject['visible']==0){
                                echo "checked";} 
                            ?>
                            >
                                <label class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    No
                                </label>
                        </div>
                    </fieldset>
                </div>
                <div class="flex flex-row justify-between items-center">
                    <input type="submit" value="Update" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
                    <a href="content.php">Cancel</a>
                </div>
            </form>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-4">
                    <h1 class="text-2xl mb-2">Pages in this Subject:</h1>
                    <ul>
                        <?php 
                            $page_set = get_all_pages($connection, $selected_subject, NULL);
                            while($page = mysqli_fetch_array($page_set)){
                                echo "<li class=\"" ?>
                                <!-- Highlight selected page -->
                                <?php
                                if($page["id"] == $selected_page){
                                    echo "text-[#00A86C]";
                                }
                                ?>
                                <?php 
                                
                                echo "<li class=\"mt-1\"><a class=\" hover:text-[#04A76C]\" href=\"content.php?page=".urlencode($page["id"])."\">> ".$page["menu_name"]."</a></li>";
                            }
                        ?>
                    <ul>
                </div>
                <?php
                    $url= "new_page.php?subj=".$selected_subject['id'];
                    echo "<span class=\"text-[#34D399]\"><a href=\"{$url}\" class=\"\">"."+ Add a Page in this Subject</a></span>" 
                ?>
        </div>
</div>

<?php require("./includes/footer.php") ?>