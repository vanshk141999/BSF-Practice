<?php

    // require "./src/person.php";
    // require "./src/business.php";
    // require "./src/staff.php";

    //to avoid above we use Composer which is a tool to manage Dependencies in PHP like npm
    //1. composer install 
    //2. whenever we update our composer.json file we run composer dump-autoload

    //require "./vendor/autoload.php"; //usually we write this in index.php
    use phpOop\Person;
    use phpOop\Staff;
    use phpOop\Business;
    
    $vansh = new Person("Vansh");

    $staff = new Staff(["Ricky", "Seema"]);

    $ecommerce = new Business($staff); //here Business depends on Staff in order to run

    $ecommerce->hire($vansh);

    echo "<pre>";
    print_r($staff);
    echo "</pre>";

?>