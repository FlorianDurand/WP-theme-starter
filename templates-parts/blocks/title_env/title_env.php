<?php


$title = get_field( 'title_env' ) ?: 'Titre de la page...' ;
$intro = get_field( 'intro_env' ) ?: 'intro...' ;

$right_image = get_field( 'right_img_env' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size)

?>

	<h2><?php echo $title ?></h2>
	<p><?php echo $intro ?></p>

<?php if( $right_image ) {

echo wp_get_attachment_image( $right_image, $size );

}
