<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );

function thumbnails_theme_support() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'icon_presta', 54, 54, true);
	add_image_size( 'fullscreen_school', 2160 , 880, false);
	add_image_size( 'fullscreen', 2880 , 1800, false);
	add_image_size( 'school_hp', 885 , 765, true);
	add_image_size( 'junior_env', 972 , 682, true);
	add_image_size( 'president_env', 232 , 241, true);
	add_image_size( 'team_env', 262 , 277, true);
	add_image_size( 'client_presta', 262 , 60, false);
	add_image_size( 'quality_presta', 167 , 157, true);
	add_image_size( 'last_actu', 972 , 763, true);
}
