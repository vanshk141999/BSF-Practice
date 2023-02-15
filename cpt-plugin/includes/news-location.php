<?php

function cpt_get_news_location_table_name(){
    global $wpdb;
    return $table_name = $wpdb->prefix.'cpt_news_location';
}

function cpt_create_news_location_table(){
    global $wpdb;
    $table_name = cpt_get_news_location_table_name();
    $charset = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        post_id int(11) NOT NULL,
        lat decimal(9,6) NOT NULL,
        lon decimal(9,6) NOT NULL,
        PRIMARY KEY (post_id)
    ) $charset;";   

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook( cpt_plugin_file, 'cpt_create_news_location_table' );

function cpt_get_news_location( $post_id ){
    global $wpdb;
    $table_name = cpt_get_news_location_table_name();
    $data = $wpdb->get_row( "SELECT * FROM $table_name WHERE post_id=" . intval( $post_id ) );
}

function cpt_save_news_location( $post_id, $lat, $lon ){
    global $wpdb;
    if ( cpt_get_news_location( $post_id ) ){
        // update
        $wpdb->update( 
            cpt_get_news_location_table_name(), 
            array(
                'lat' => $lat,
                'lon' => $lon,
            ),
            array( 'post_id' => $post_id ),          
            array(
                '%f',
                '%f',
            ),
            array( '%d' )
        );
    }
    else{
        // create
        $wpdb->insert(
            cpt_get_news_location_table_name(),
            array(
                'post_id' => $post_id,
                'lat' => $lat,
                'lon' => $lon
            ),
            array(
                '%d',
                '%f',
                '%f',
            )
            );
    }
}