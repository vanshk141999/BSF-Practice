<?php

/* enqueue scripts and style from parent theme */
    
// function test_theme_styles() {
//     wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_uri(),
//     array( 'astra-theme-css' ), wp_get_theme()->get('Version') );
// }
// add_action( 'wp_enqueue_scripts', 'test_theme_styles');


//For testing Xdebug
$words = array("I","am","vansh");
foreach($words as $word){
    echo $word." ";
}

//Custom Taxonomy Subjects
function wporg_register_taxonomy_course() {
	$labels = array(
		'name'              => _x( 'Courses', 'taxonomy general name' ),
		'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Courses' ),
		'all_items'         => __( 'All Courses' ),
		'parent_item'       => __( 'Parent Course' ),
		'parent_item_colon' => __( 'Parent Course:' ),
		'edit_item'         => __( 'Edit Course' ),
		'update_item'       => __( 'Update Course' ),
		'add_new_item'      => __( 'Add New Course' ),
		'new_item_name'     => __( 'New Course Name' ),
		'menu_name'         => __( 'Course' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'course' ],
	);
	
	register_taxonomy( 'course', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );


// Our custom post type function
function create_posttype() {
  
    register_post_type( 'events',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>