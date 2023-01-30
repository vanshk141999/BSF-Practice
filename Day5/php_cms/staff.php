<?php require_once("./includes/functions.php") ?>
<?php include("./includes/header.php") ?>
<div class="flex flex-row h-[100%] w-[100%] whitespace-nowrap">
    <div class="bg-[#15202B] text-white h-[100vh] w-fit text-[#D3D3D4] pr-4">
        <ul class="sticky top-10 z-50 mt-10 ml-2 ">
            <li class="my-2"><a href="content.php">> Manage Website Content</a></li>
            <li class=""><a href="new_user.php">> Add Staff User</a></li>
            <li class="my-2"><a class="text-[red]" href="logout.php">> Log Out</a></li>
        </ul>
    </div>
    <div class="bg-[#1D2A35] h-[100vh] w-full p-8 text-[#D3D3D4]">
        <h1 class="text-4xl">Staff Menu</h1>
        <h3 class="my-2">
            Welcome to Staff Area, [USERNAME]
        </h3>
    </div>
</div>
<?php include("./includes/footer.php") ?>