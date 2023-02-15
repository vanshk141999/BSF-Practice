<?php

if( !defined('ABSPATH') ){
    die('Not allowed to access this file');
 }

function cpt_news(){

    $post_type = 'news';
    $args = array(
        'public'=>true,
        'label'=>'News',
        'has_archive'=>true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
    register_post_type( $post_type, $args );

    register_taxonomy( "news_category", $post_type, array(
        'hierarchical'=> true,
        'label'=>'News Category',
    )
    );

}

add_action('init', 'cpt_news');

function cpt_activate(){
    cpt_news();
    flush_rewrite_rules();
}
register_activation_hook( cpt_plugin_file, 'cpt_activate');