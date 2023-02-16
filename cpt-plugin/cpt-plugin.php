<?php

/**
 * Plugin Name: CPT Plugin
 * Description: This plugin displays CPT
 * Version:     1.0
 * Author:      Vansh Kapoor
 * Author URI:  https://vanshk141999.github.io/
 * License:     GPLv2 or later
 * Text Domain: cpt-plugin
 */

/* If you are accessing a file directly via a URL, the wp-config.php file may not be executed, so 
* ABSPATH may not be defined in that context. However, in most cases, WordPress files are accessed
* via the PHP file system, rather than directly via a URL.
*/
 if( !defined('ABSPATH') ){
    die('Not allowed to access this file');
 }

define( 'cpt_plugin_file', __FILE__ );
define( 'cpt_plugin_version', "1.0" );

require_once dirname(__FILE__)."/includes/wp-requirements.php";
$plugin_checks = new cpt_Requirements( 'CPT Plugin', cpt_plugin_file, array(
    'PHP' => '5.3.3',
    'WordPress' => '4.1',
) );

if( false === $plugin_checks->pass() ){
    $plugin_checks->halt();
    return;
}

require_once dirname(__FILE__)."/includes/new-meta-box.php";
require_once dirname(__FILE__)."/includes/add-cpt.php";
require_once dirname(__FILE__)."/includes/admin-news-settings.php";
require_once dirname(__FILE__)."/includes/news-content.php";
require_once dirname(__FILE__)."/includes/news-location.php";
require_once dirname(__FILE__)."/includes/welcome-screen.php";