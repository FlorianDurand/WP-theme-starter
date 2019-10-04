<?php


$end_image = get_field( 'end_section_image' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size)

if( $end_image ) {

	echo wp_get_attachment_image( $end_image, $size );

}


