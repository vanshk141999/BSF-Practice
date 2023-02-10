<?php

/**
 * Plugin Name: Demo Plugin
 * Description: My First Plugin
 * Version:     1.0
 * Author:      Vansh Kapoor
 * Author URI:  https://vanshk141999.github.io/
 * License:     GPLv2 or later
 */


 $my_arr = array( 'first'=>1, 'second'=>2, 'third'=>3 );


 // To avoid function name conflict we use classes.
 class dp{

    function __construct(){
        echo "Starting my plugin";
    }

    public function show_arr_values($arr){
        $this->get_arr($arr);
    }

    private function get_arr($arr){
       echo "<pre>"; 
       var_dump($arr); 
       echo "</pre>";
    }

 }

// $GLOBALS is used to make variable accessible in other files.
// $GLOBALS['dp_arr'] = new dp();
// $GLOBALS['dp_arr']->show_arr_values($my_arr);

$_REQUEST; // It is a mixture of both $_GET & $_POST. We use this when we are not sure how the value is passed.

class dp_funcs{
    function __construct(){
        add_filter( 'dp_change_arr', array($this, 'change_arr_values'), 1, 1 );
    }
    public function change_arr_values($arr){
    $new_arr = [];
    foreach($arr as $key => $value){
       $num = $value * 2;
       $new_arr[$key] = $num;
    }
    return $new_arr;
   }
}

$mul_arr = new dp_funcs();

/* array($mul_arr, 'change_arr_values') - This is known as a "method call" and it allows you to call a method of an object as the callback function.
*/
// add_filter( 'dp_change_arr', array($mul_arr, 'change_arr_values'), 1, 1 );

$my_array = apply_filters('dp_change_arr', $my_arr);

var_dump($my_array);
 ?>