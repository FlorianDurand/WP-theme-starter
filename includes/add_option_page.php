<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Options Globales',
		'menu_title'	=> 'Options Globales',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title'    => 'Google Analytics',
		'menu_title'    => 'Google Analytics',
		'parent_slug'   => 'theme-general-settings',
	));
}