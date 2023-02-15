<?php

function cpt_welcome_page(){
    add_dashboard_page( 'Welcome', 'Welcome Page', 'read', 'new-welcome-page', 'cpt_show_welcome_page', 'top');
};

add_action( 'admin_menu', 'cpt_welcome_page' );

function cpt_show_welcome_page(){
    include dirname(__FILE__) . '/templates/welcome-page.php';
}

function cpt_remove_welcome_page_menu_page(){
    remove_submenu_page( 'index.php', 'new-welcome-page' );
}
add_action( 'admin_head', 'cpt_remove_welcome_page_menu_page' );

function cpt_welcome_screen_activate(){
    set_transient( 'cpt_welcome_screen_redirect', true, 30 );
}
register_activation_hook( cpt_plugin_file, 'cpt_welcome_screen_activate' );

function cpt_welcome_page_redirect(){
    if ( ! get_transient('cpt_welcome_screen_redirect') ){
        return;
    }

    delete_transient( 'cpt_welcome_screen_redirect' );

    // Handle multiple plugins activations and if the user is using multisite network
    if ( is_network_admin() || isset( $_GET['activate-multi'] ) ){
        return;
    }

    wp_safe_redirect( admin_url( 'index.php?page=new-welcome-page' ) );
    die();
}

// fires when admin area is initialized in WordPress Backend on every single page load
add_action( 'admin_init', 'cpt_welcome_page_redirect' );