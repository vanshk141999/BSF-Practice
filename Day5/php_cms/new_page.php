<?php require_once("./includes/session.php") ?>
<?php confirm_logged_in() ?>
<?php include("./includes/header.php") ?>
<?php require_once("./includes/connection.php") ?>
<?php require_once("./includes/functions.php") ?>
<?php find_selected_page(); ?>
<div class="flex flex-row h-[100%] w-[100%] whitespace-nowrap">
    <div class="sticky bg-[#15202B] text-white h-[100vh] w-fit text-[#D3D3D4] pr-8 overflow-auto">
        <ul class="z-50 ml-2">
            <?php nav_menu($connection, $selected_subj, $selected_page) ?>
            <li class="my-2 mt-8 text-red-400"><a href="staff.php"><- Back to Main Menu</a></li>
        </ul>
    </div>
    <div class="bg-[#1D2A35] h-[100vh] w-full p-8 text-[#D3D3D4]">
        <h1 class="text-4xl">Add Page in: <?php

            if(isset($selected_subj)){
            $subject_by_id = get_all_subjects($connection,$selected_subj,NULL);
            if($selected_subject = mysqli_fetch_array($subject_by_id)){
                echo "<span class=\"text-4xl text-[#00A86C]\">".$selected_subject['menu_name']."</span>";
            }
            }

        ?></h1>
        <?php $url= "create_page.php?subj=".$selected_subject['id'] ?>
        <form class="my-6" action="<?php echo $url ?>" method="post">
            <div class="mb-6">
                <input name="menu_name" type="text" maxlength="18"  autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Page Name[Max 18]" required>
            </div>
            <div class="mb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                <select name="position" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <?php

                        $page_set = get_all_pages($connection, $selected_subject, NULL);
                        $page_count = mysqli_num_rows($page_set);
                        for($count = 1; $count <= $page_count+1; $count++){
                            echo "<option value=\"$count\">".$count."</option>";
                        }

                    ?>
                </select>
            </div>
            <div class="mb-6">
                <fieldset>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visible</label>
                    <div class="flex items-center mb-4">
                        <input type="radio" name="visible" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <label class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Yes
                            </label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input type="radio" name="visible" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                            <label class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                No
                            </label>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                        <textarea name="content" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your Content here..."></textarea>
                    </div>
                </fieldset>
            </div>
            <div class="flex flex-row justify-between items-center">
                <input type="submit" value="+ ADD" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
                <a href="content.php">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?php require("./includes/footer.php") ?>