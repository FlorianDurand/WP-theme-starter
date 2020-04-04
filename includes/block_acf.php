<?php

add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
function add_block_editor_assets(){
	wp_enqueue_style('block_editor_css', get_template_directory_uri() . '/templates-parts/blocks_style/blocks.css');
}
function register_acf_block_types() {

	/*
	 * Home Page
	 */
	acf_register_block_type(array(
		'name'              => 'nameOfBlock',
		'title'             => __('Title of Block'),
		'description'       => __('Description of Block'),
		'render_template'   => 'templates-parts/blocks/block.php',
		'category'          => 'formatting',
		'icon'              => '',
		'keywords'          => array( 'keyword1', 'keyword2', 'keyword3' ),
	));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'register_acf_block_types');
}