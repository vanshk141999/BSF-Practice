<?php

function news_frontend_styles( $hook ){
    if(is_singular( post_types:'news' )){
        wp_enqueue_style( 'news_settings_styles', plugins_url('includes/css/frontend.css', cpt_plugin_file ), array(), cpt_plugin_version );
    }
}

add_action( 'wp_enqueue_scripts', 'news_frontend_styles' );

function cpt_add_location( $content ){
    if(is_singular( post_types:'news' )){
        $location = cpt_get_news_location( get_the_ID() ); 
        // esc_html will not execute HTML
        if( $location != NULL ){
        $content = '<span>'.esc_html( " / " . $location->lat . ", " . $location->lon ).'</span>'.$content;
        }
        $content = '<span>'.esc_html( get_post_meta( get_the_ID(), '_news_location', true ) ).'</span>'.$content;
    }
    return $content;
}

add_filter( 'the_content', 'cpt_add_location' );

function add_related_posts_after_content( $content ){
    // global $post;
    if( is_singular( 'news' ) && get_option( 'cpt_max_num_related_posts', 3 )){
        $args = array(
            'numberposts' => get_option( 'cpt_max_num_related_posts', 3 ),
            'post_type' => 'news',
            'exclude' => get_the_ID(),
            'meta_key' => '_news_location',
            'meta_value' => get_post_meta( get_the_ID(), '_news_location', true )
        );
       $related_posts = get_posts( $args );
       ob_start();
       ?> 
       <?php 
       if( count( $related_posts ) && get_option( 'cpt_show_related_news_box', '1' ) ) 
        {
            echo "<h3>" .esc_html( get_option( 'cpt_news_related_title', 'Related News' ) )." ".esc_html( get_post_meta( get_the_ID(), '_news_location', true ) )."</h3>";
            ?>
            <ul class="related-posts-list">
            <?php foreach($related_posts as $post): ?>
                <!-- The setup_postdata function is used in WordPress to set up the current post data when using a custom query. It takes the post object as a parameter and sets it as the global $post variable so that other functions such as the_title() can access the post's data. -->
                    <?php // setup_postdata( $post ); ?>
                    <li><a href="<?php echo get_the_permalink( $post->ID ) ?>"><?php echo get_the_title( $post->ID ) ?></li>
                <?php endforeach; ?>
            </ul>
            <?php
            $content .= ob_get_clean();
            //    wp_reset_postdata();
            }
            return $content;
        }
}

add_filter( 'the_content', 'add_related_posts_after_content' );