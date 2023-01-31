<?php require_once("./includes/session.php") ?>
<?php //confirm_logged_in() ?>
<?php require_once("./includes/constants.php") ?>
<?php require_once("./includes/functions.php") ?>

<?php include("./includes/header.php") ?>
<div class="flex flex-row h-[100%] w-[100%] whitespace-nowrap">
    <div class="bg-[#15202B] text-white h-[100vh] w-fit text-[#D3D3D4] pr-4">
        <ul class="sticky top-10 z-50 mt-10 ml-2 ">
            <li class="my-2"><a class="text-[red]" href="staff.php">> Return to Staff Page</a></li>
        </ul>
    </div>
    <div class="items-center bg-[#1D2A35] h-[100vh] w-full p-8 text-[#D3D3D4]">
        <h1 class="text-4xl mb-4">Create New User</h1>
        <?php

            if(isset($_GET['create'])&&$_GET['create']==1){
                echo "<div id=\"close-update-message\" class=\"mt-2 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 rounded-lg dark:text-gray-400 \">
                        <div class=\"inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200\">
                            <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z\" clip-rule=\"evenodd\"></path></svg>
                            <span class=\"sr-only\">Check icon</span>
                        </div>
                        <div class=\"ml-3 text-sm font-normal\">User created successfuly!</div>
                        <button onclick=\"hideMessage()\" type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700\" data-dismiss-target=\"#toast-success\" aria-label=\"Close\">
                            <span class=\"sr-only\">Close</span>
                            <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                        </button>
                    </div>";
            }
            elseif(isset($_GET['create'])&&$_GET['create']==0){
                echo "
                <div id=\"close-update-message\" class=\"mt-2 flex items-center w-full     max-w-xs p-4 mb-4 text-gray-500 rounded-lg dark:text-gray-400\" role=\"alert\">
                <div class=\"inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200\">
                    <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                    <span class=\"sr-only\">Error icon</span>
                    </div>
                    <div class=\"ml-3 text-sm font-normal\">Username already exists!</div>
                    <button onclick=\"hideMessage()\" type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700\" data-dismiss-target=\"#toast-danger\" aria-label=\"Close\">
                    <span class=\"sr-only\">Close</span>
                    <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                    </button>
            </div>";
            }

        ?>
        <form action="create_user.php" method="post">
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Username</label>
            <input autocomplete="off" type="username" name="username" maxlength="30" minlength="8" value="" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Password</label>
            <input autocomplete="off" type="password" name="password" maxlength="30" minlength="8" value="" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create User</button>
        </form>

    </div>
</div>
<?php include("./includes/footer.php") ?>