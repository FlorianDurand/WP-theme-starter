<?php


$title = get_field( 'title_school' ) ?: 'Titre de la page...' ;
$intro_left = get_field( 'intro_school_left' ) ?: 'intro gauche' ;
$intro_right = get_field( 'intro_school_right' ) ?: 'intro droite' ;


$background_image = get_field( 'background_school' );
$size = 'fullscreen_school' ; // (thumbnail, medium, large, full or custom size)

?>
<div class="title_school first-element">
	<?php if( $background_image ) {

		echo wp_get_attachment_image( $background_image, $size );

	} ?>
    <h1 class="h2"><?php echo $title ?></h1>
    <div class="intro">
        <p><?php echo $intro_left ?></p>
        <p><?php echo $intro_right ?></p>
    </div>
</div>

