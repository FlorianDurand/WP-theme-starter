<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );

function thumbnails_theme_support() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'icon_presta', 54, 54, true);
	add_image_size( 'fullscreen', 2880 , 1800, false);
	add_image_size( 'school_hp', 885 , 765, true);
}
