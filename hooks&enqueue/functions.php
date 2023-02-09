<?php

do_action($tag, $arg);

add_action($tag, $cust_func_name1, $priority, $arg_count);

function cust_func_name1($arg){
 // code.
}

apply_filters($tag, $value, $arg);

add_filter($tag, $cust_func_name2, $priority, $arg_count);

function cust_func_name2($value, $arg){
 // modify $value.
 return $value;
}

/**
* add_action('admin_init', 'display_bsf_plugins', 1, 0 );
* 
* function display_bsf_plugins(){
* 
* }
*/

add_filter( 'add_bsf_plugin_filter', 'display_bsf_plugins', 10, 2 );

function display_bsf_plugins($string, $url){
	$string = "BSF Plugins";
	$url = "/wp-admin/plugins.php?s=Brainstorm+Force&plugin_status=all";
	return [$string, $url];
}

remove_filter( 'add_bsf_plugin_filter', 'display_bsf_plugins', 10 );

add_action( 'wp_enqueue_scripts','enqueue_cust_script' );

function enqueue_cust_script(){
	wp_enqueue_script('bsf-filter', get_template_directory_uri().'/admin/assets/bsf-plugin-filter.js');
}


?>