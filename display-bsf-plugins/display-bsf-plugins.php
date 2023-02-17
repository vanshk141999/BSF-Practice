<?php

/**
 * Plugin Name: Display BSF Plugins
 * Description: Adds a filter on plugins page to display all plugins from BSF.
 * Version:     1.0
 * Author:      Vansh Kapoor
 * Author URI:  https://vanshk141999.github.io/
 * License:     GPLv2 or later
 */

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
else  
        $url = "http://";     
$url.= $_SERVER['HTTP_HOST'];      
$url.= $_SERVER['REQUEST_URI'];    

if(str_contains($url,'plugins')){
    add_filter( 'add_bsf_plugin_filter', 'display_bsf_plugins', 1, 2 );

    function display_bsf_plugins($string, $url){
        $string = "BSF Plugins";
        $url = "/wp-admin/plugins.php?s=Brainstorm+Force&plugin_status=all";
        return [$string, $url];
    }

    add_action( 'admin_enqueue_scripts','enqueue_cust_script', 1, 0, true);

    function enqueue_cust_script(){
        wp_enqueue_script('bsf-filter', plugin_dir_url( __FILE__ ).'/bsf-plugin-filter.js');
    }
}

 ?>