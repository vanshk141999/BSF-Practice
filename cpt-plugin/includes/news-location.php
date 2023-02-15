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
    if( $news_location = get_transient( 'cpt_news_location'. $post_id ) ){
        // only hits this lines if it has grabbed the saved copy of $news_location
        // var_dump($news_location);
        return $news_location;
    }
    $news_location = $wpdb->get_row( "SELECT * FROM $table_name WHERE post_id=" . intval( $post_id ) );
    if( NULL == $news_location ){
        $wpdb->insert(
            cpt_get_news_location_table_name(),
            array(
                'post_id' => intval( $post_id ),
            ),
            array(
                '%d',
            )
            );
        $news_location = $wpdb->get_row( "SELECT * FROM $table_name WHERE post_id=" . intval( $post_id ) );

        // $news_location = new stdClass;
        // $news_location->lat='';
        // $news_location->lon='';
        // print_r($news_location);
        return $news_location;
    }
    else{
        set_transient( 'cpt_news_location'. $post_id, $news_location );
        return $news_location;
    }
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
        delete_transient( 'cpt_news_location'. $post_id, $news_location );
    
}