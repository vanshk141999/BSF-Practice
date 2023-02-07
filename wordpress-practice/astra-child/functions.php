<?php

	// Custom Taxonomy Courses.
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

		$capabilities = array(
			'manage_terms' => __('manage_courses'),
			'manage_terms' => __('manage_categories'),
			'edit_terms'   => __('manage_categories'),
			'delete_terms' => __('manage_categories'),
			'assign_terms' => __('edit_posts'),
		);

		$args   = array(
			'hierarchical'      => true, // make it hierarchical (like categories).
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug' => 'course' ],
			'capabilities'      => $capabilities,
		);
		
		register_taxonomy( 'course', [ 'post' ], $args );
	}
	add_action( 'init', 'wporg_register_taxonomy_course' );


	/*
	* Custom Post Type Movies.
	*/
	function custom_post_type() {
  
		$labels = array(
			'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwentyone' ),
			'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwentyone' ),
			'menu_name'           => __( 'Movies', 'twentytwentyone' ),
			'parent_item_colon'   => __( 'Parent Movie', 'twentytwentyone' ),
			'all_items'           => __( 'All Movies', 'twentytwentyone' ),
			'view_item'           => __( 'View Movie', 'twentytwentyone' ),
			'add_new_item'        => __( 'Add New Movie', 'twentytwentyone' ),
			'add_new'             => __( 'Add New', 'twentytwentyone' ),
			'edit_item'           => __( 'Edit Movie', 'twentytwentyone' ),
			'update_item'         => __( 'Update Movie', 'twentytwentyone' ),
			'search_items'        => __( 'Search Movie', 'twentytwentyone' ),
			'not_found'           => __( 'Not Found', 'twentytwentyone' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
		);
		   
		$args = array(
			'label'               => __( 'movies', 'twentytwentyone' ),
			'description'         => __( 'Movie news and reviews', 'twentytwentyone' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'taxonomies'          => array( 'genres' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
	  
		);

		register_post_type( 'movies', $args );
	  
	}
	  
	add_action( 'init', 'custom_post_type', 0 );

?>