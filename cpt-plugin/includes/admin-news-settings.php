<?php

class cpt_Admin{
    function __construct(){
        add_action( 'admin_menu', array( $this, 'register_settings_menu_page' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'news_settings_styles' ) );
    }

    function news_settings_styles( $hook ){
        if( 'news_page_news-settings' != $hook ){
            return;
        }
        wp_enqueue_style( 'news_settings_styles', plugins_url('includes/css/settings.css', cpt_plugin_file ), array(), cpt_plugin_version );
    }

    function register_settings_menu_page(){
        add_submenu_page( 'edit.php?post_type=news', 'News Settings', 'Settings', 'manage_options', 'news-settings', array( $this, 'render_settings_page' ) );
    }

    function render_settings_page(){
        if( isset( $_POST['news_settings_nonce'] ) ){
            $this->save_news_settings();
        }
        include dirname(__FILE__)."/templates/admin-news-settings-template.php";
    }

    function save_news_settings(){
        if( !wp_verify_nonce( $_POST['news_settings_nonce'] , 'news_settings_save') ){
            wp_die( 'Security token invalid' );
        }

        if( !current_user_can( 'manage_options' ) ){
            wp_die( 'You do not have access to this page' );
        }
        
        if( isset( $_POST[ 'news_related_title' ] ) ){
            update_option( 'cpt_news_related_title', sanitize_text_field( $_POST[ 'news_related_title' ] ) );
                update_option( 'cpt_show_related_news_box', isset( $_POST['show_related_news_box' ] )? 1 : 0 );
                update_option( 'cpt_max_num_related_posts', isset( $_POST['max_num_related_posts' ] ) ? intval( $_POST['max_num_related_posts' ] ): "" );
            $this->show_success_message();
        }
    }

    function show_success_message(){
        ?>
        <div class="notice notice-success"> 
            <p>
                <strong>Settings saved.</strong>
            </p>
        </div>
        <?php
    }
}

$cpt_admin = new cpt_Admin();