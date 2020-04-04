<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );

function thumbnails_theme_support() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'icon_presta', 54, 54, true); //('name of image size',int(width), int(height), bool(crop) If false, the image will be scaled (default), If true, image will be cropped to the specified dimensions using center positions. If an array, the image will be cropped using the array to specify the crop location. Array values must be in the format: array( x_crop_position, y_crop_position ) where: - x_crop_position accepts: 'left', 'center', or 'right'. - y_crop_position accepts: 'top', 'center', or 'bottom'.)
	
}
