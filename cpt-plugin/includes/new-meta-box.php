<?php

if( !defined('ABSPATH') ){
    die('Not allowed to access this file');
 }

function cpt_add_new_meta_box(){
    add_meta_box('news_meta_box', 'News Location', 'cpt_render_news_location_meta_box', 'news', 'normal', 'low');
}

add_action('add_meta_boxes_news', 'cpt_add_new_meta_box' );

function cpt_render_news_location_meta_box($post){
    wp_nonce_field( 'news_meta_box_saving', 'news_meta_box_nonce' );
    $location = cpt_get_news_location( $post->ID );
    ?>
        <div class="news-location-container">
            <p>
                <label for="news-location">
                    <?php echo esc_html__( 'Location', 'cpt-plugin') ; ?>
                </label>
                <input type="text" id="news-location" name="news_location" value="<?php echo esc_attr( get_post_meta($post->ID, '_news_location', true) ); ?>">
            </p>
            <p>
                <label for="news-location-lat">
                    <?php echo esc_html__( 'Lattitude', 'cpt-plugin') ; ?>
                </label>
                <input type="text" id="news-location-lat" name="news_location_lat" value="<?php 
                    if( $location === NULL ){
                        // echo 0;
                    }
                    else{
                        echo esc_attr( $location->lat );
                    }
                ?>">
            </p>
            <p>
                <label for="news-location-lon">
                    <?php echo esc_html__( 'Longititude', 'cpt-plugin') ; ?>
                </label>
                <input type="text" id="news-location-lon" name="news_location_lon" value="<?php 
                    if( $location === NULL ){
                        // echo 0;
                    }
                    else{
                        echo esc_attr( $location->lon );
                    }
                ?>">
            </p>
        </div> 
    <?php
}

function cpt_save_news_meta_data( $post_id ){
    if( !isset( $_POST['news_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['news_meta_box_nonce'] , 'news_meta_box_saving') ){
        return;
    }
    if( !current_user_can('edit_post', $post_id) ){
        return;
    }
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
        return;
    }
    if( isset( $_POST['news_location'] ) ){
        update_post_meta( $post_id, '_news_location', sanitize_text_field( $_POST['news_location'] ) );
    }
    if( isset( $_POST['news_location_lat'] ) &&  isset( $_POST['news_location_lon'] )){
        cpt_save_news_location( $post_id, floatval( $_POST['news_location_lat'] ), floatval( $_POST['news_location_lon'] ) );
    }
}

add_action('save_post_news', 'cpt_save_news_meta_data');