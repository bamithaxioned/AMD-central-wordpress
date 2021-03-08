<?php
	#ADDING STYLESHEET AND SCRIPTS
	function amd_load_scripts()
	{
		wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/amdstyling.css', array(), '1.0.0', 'all');
		wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/amdjs.js', array(), '1.0.0', true);
	};
	add_action('wp_enqueue_scripts', 'amd_load_scripts');

	#ADDING MENUS
	function amd_display_menus()
	{
		add_theme_support('menus');
		register_nav_menu(
			array(
				'top-menu' => "Header Menu",
				'footer-menu' => 'Footer Menu'
			)
		);
	};
	add_action('init', 'amd_display_menus');

	#CUSTOM POST - SPORTS
	function custom_post_sports()
	{
 		$labels = array(
	        'name' => 'Sports',
	        'singular_name' => 'Sport', //Used inside admin Panel
	        'add_new' => 'Add Sport',
	        'all_items' => 'All Items',
	        'add_new_item' => 'Add Item',
	        'edit_item' => 'Edit Item',
	        'new_item' => 'New Item',
	        'view_item' => 'View Item',
	        'search_item' => 'Search Sport',
	        'not_found' => 'No items found',
	        'not _found_in_trash' => 'No items found in trash',
	        'parent_item_colon' => 'Parent Item'
    	);

		$supports = array(
			'title',
	        'editor',
	        'excerpt',
	        'thumbnail',
	        'revisions'
	    );

		$args = array(
			'labels' => $labels,
			'supports' => $supports,
	        'public' => true,
	        'has_archive' => true,
	        'publicly_queryable' => 'true',
	        'query_var' => true,
	        'rewrite' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'taxonomies' => array('category', 'post_tag'),
	        'menu_position' => 4,
	        'exclude_from_search' => false,
		);
		register_post_type('sports', $args);
	};
	add_action('init', 'custom_post_sports');
?>