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
?>