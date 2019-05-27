<?php
/*
*		Plugin Name:	BlueFire Custom Post Types and Taxonomies
*		Description:	BlueFire Theme plugin for creating custom post types and taxonomies
*		Version: 1.0
*		Authors: BlueFire Dev Team
*		License: MIT
*/

/*===========================================================*/
/*======================  Post Types  =======================*/
/*===========================================================*/


function bluefire_post_types() {

	// Post Type's Labels & Info Here
	$plural_name = 'Videos';
	$singular_name = 'video';
	$slug = 'video';
	$registered_name = 'video';

	// Post Type's Name Here
	$labels = array(
			'name'							 => $plural_name,
			'singular_name'			 => $singular_name,
			'menu_name'					 => $plural_name,
			'name_admin_bar'		 => $singular_name,
			'add_new'						 => 'Add New',
			'add_new_item'			 => 'Add New ' . $singular_name,
			'new_item'					 => 'New ' . $singular_name,
			'edit_item'					 => 'Edit ' . $singular_name,
			'view_item'					 => 'View ' . $singular_name,
			'all_items'					 => 'All ' . $plural_name,
			'search_items'			 => 'Search ' . $plural_name,
			'parent_item_colon'  => 'Parent ' . $plural_name. ':',
			'not_found'					 => 'No ' . $plural_name . ' found.',
			'show_in_rest'       => true,
			'rest_base'          => 'races',
  		'rest_controller_class' => 'WP_REST_Posts_Controller',
			'not_found_in_trash' => 'No ' . $plural_name . ' found in trash.'
		);

	$args = array(
			'labels'					 => $labels,
			'public'					 => true,
			'public_queryable' => true,
			'show_ui'					 => true,
			'show_in_menu'		 => true,
			'menu_position'		 => 5,
			'menu_icon'				 => 'dashicons-lightbulb', // Custom icon in WP-admin area
			'query_var'				 => true,
			'rewrite'					 => array( 'slug' => $slug, 'with_front' => false ),
			'capability_type'	 => 'post',
			'has_archive'			 => true,
			'hierarchical'		 => false,
			'supports'				 => array( 'title')
		);
	register_post_type( $registered_name, $args );

	// Post Type's Labels & Info Here
	$plural_name = 'Podcasts';
	$singular_name = 'Podcast';
	$slug = 'podcast';
	$registered_name = 'podcast';

	// Post Type's Name Here
	$labels = array(
			'name'							 => $plural_name,
			'singular_name'			 => $singular_name,
			'menu_name'					 => $plural_name,
			'name_admin_bar'		 => $singular_name,
			'add_new'						 => 'Add New',
			'add_new_item'			 => 'Add New ' . $singular_name,
			'new_item'					 => 'New ' . $singular_name,
			'edit_item'					 => 'Edit ' . $singular_name,
			'view_item'					 => 'View ' . $singular_name,
			'all_items'					 => 'All ' . $plural_name,
			'search_items'			 => 'Search ' . $plural_name,
			'parent_item_colon'  => 'Parent ' . $plural_name. ':',
			'not_found'					 => 'No ' . $plural_name . ' found.',
			'show_in_rest'       => true,
			'rest_base'          => 'races',
  		'rest_controller_class' => 'WP_REST_Posts_Controller',
			'not_found_in_trash' => 'No ' . $plural_name . ' found in trash.'
		);

	$args = array(
			'labels'					 => $labels,
			'public'					 => true,
			'public_queryable' => true,
			'show_ui'					 => true,
			'show_in_menu'		 => true,
			'menu_position'		 => 5,
			'menu_icon'				 => 'dashicons-lightbulb', // Custom icon in WP-admin area
			'query_var'				 => true,
			'rewrite'					 => array( 'slug' => $slug, 'with_front' => false ),
			'capability_type'	 => 'post',
			'has_archive'			 => true,
			'hierarchical'		 => false,
			'supports'				 => array( 'title')
		);
	register_post_type( $registered_name, $args );


	// Post Type's Labels & Info Here
	$plural_name = 'Media';
	$singular_name = 'Media';
	$slug = 'media';
	$registered_name = 'media';

	// Post Type's Name Here
	$labels = array(
			'name'							 => $plural_name,
			'singular_name'			 => $singular_name,
			'menu_name'					 => $plural_name,
			'name_admin_bar'		 => $singular_name,
			'add_new'						 => 'Add New',
			'add_new_item'			 => 'Add New ' . $singular_name,
			'new_item'					 => 'New ' . $singular_name,
			'edit_item'					 => 'Edit ' . $singular_name,
			'view_item'					 => 'View ' . $singular_name,
			'all_items'					 => 'All ' . $plural_name,
			'search_items'			 => 'Search ' . $plural_name,
			'parent_item_colon'  => 'Parent ' . $plural_name. ':',
			'not_found'					 => 'No ' . $plural_name . ' found.',
			'show_in_rest'       => true,
			'rest_base'          => 'races',
  		'rest_controller_class' => 'WP_REST_Posts_Controller',
			'not_found_in_trash' => 'No ' . $plural_name . ' found in trash.'
		);

	$args = array(
			'labels'					 => $labels,
			'public'					 => true,
			'public_queryable' => true,
			'show_ui'					 => true,
			'show_in_menu'		 => true,
			'menu_position'		 => 5,
			'menu_icon'				 => 'dashicons-lightbulb', // Custom icon in WP-admin area
			'query_var'				 => true,
			'rewrite'					 => array( 'slug' => $slug, 'with_front' => false ),
			'capability_type'	 => 'post',
			'has_archive'			 => true,
			'hierarchical'		 => false,
			'supports'				 => array( 'title', 'editor', 'thumbnail')
		);
	register_post_type( $registered_name, $args );

}
// Init all post types
add_action( 'init', 'bluefire_post_types' );

function my_rewrite_flush() {
  // First, we "add" the custom post type via the above written function.
  // Note: "add" is written with quotes, as CPTs don't get added to the DB,
  // They are only referenced in the post_type column with a post entry,
  // when you add a post of this CPT.
  bluefire_post_types();

  // ATTENTION: This is *only* done during plugin activation hook in this example!
  // You should *NEVER EVER* do this on every page load!!
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );


/*===========================================================*/
/*======================  Taxonomies  =======================*/
/*===========================================================*/


function bluefire_taxonomies() {

	// Taxonomy Labels & Info Here
	$plural_name = 'Series';
	$singular_name = 'Series';
	$slug = 'series';
	$registered_name = 'series';
	$post_type = 'podcast';

	// Taxonomy Name Here
	$labels = array(
			'name'											 => $plural_name,
			'singular_name'							 => $singular_name,
			'search_items'							 => 'Search ' . $plural_name,
			'popular_items'							 => 'Popular ' . $plural_name,
			'all_items'									 => 'All ' . $plural_name,
			'parent_item'								 => null,
			'parent_item_colon'					 => null,
			'edit_item'									 => 'Edit ' . $singular_name,
			'update_item'								 => 'Update ' . $singular_name,
			'add_new_item'							 => 'Add New ' . $singular_name,
			'new_item_name'							 => 'New ' . $singular_name . ' Name',
			'separate_items_with_commas' => 'Seperate ' . $plural_name . ' with commas',
			'add_or_remove_items'				 => 'Add or Remove Items',
			'choose_from_most_used'			 => 'Choose from the most used',
			'not_found'									 => 'No ' . $plural_name . ' found.',
			'menu_name'									 => $plural_name
		);

	$args = array(
			'hierarchical'					=> true, // "True" for "Category Style", "False" for "Tag Style"
			'labels'								=> $labels,
			'show_ui'								=> true,
			//'meta_box_cb'           => false, // Uncomment to keep UI, but hide the Meta Box. !!! 'show_ui' must be true!!!
			'show_admin_column'			=> true,
			'update_count_callback'	=> '_update_post_term_count',
			'query_var'							=> true,
			'rewrite'								=> array( 'slug' => $slug, 'with_front' => false )
		);

	register_taxonomy( $registered_name, array( $post_type  ), $args );

}
// Init all taxonomies
add_action( 'init', 'bluefire_taxonomies' );
