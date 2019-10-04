<?php


$title = get_field( 'title_school' ) ?: 'Titre de la page...' ;
$intro = get_field( 'intro_school' ) ?: 'intro...' ;

$background_image = get_field( 'background_school' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size)

?>

	<h2><?php echo $title ?></h2>
	<p><?php echo $intro ?></p>

<?php if( $background_image ) {

echo wp_get_attachment_image( $background_image, $size );

}
