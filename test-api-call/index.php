<?php

/**
 * Plugin Name: Add 100 Posts
 * Description: Add 100 posts on Activation
 * Version:     1.0
 * Author:      Vansh Kapoor
 * Author URI:  https://vanshk141999.github.io/
 * License:     GPLv2 or later
 * Text Domain: cpt-plugin
 */

function tac_handle_api_call(){
 $url = "https://jsonplaceholder.typicode.com/posts";
 $response = wp_remote_get( $url );
 if( is_array($response) ){
    $posts = json_decode( $response['body'] );
    foreach($posts as $post){
        wp_insert_post( array(
            'post_title' => $post->title,
            'post_content' => $post->body,
            'post_status' => 'publish',
        ) ); 
    }
 }
}

register_activation_hook( __FILE__, 'tac_handle_api_call' );