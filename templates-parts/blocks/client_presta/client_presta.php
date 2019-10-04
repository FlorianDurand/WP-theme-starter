<?php


$title = get_field( 'title_client_presta' ) ?: 'Titre de la section...' ;
$desc = get_field( 'description_client_presta' ) ?: 'Description...' ;

$picture_client_presta = get_field( 'picture_client_presta' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size) ?>


    <h2><?php echo $title ?></h2>
    <p><?php echo $desc ?></p>

<?php
if( $picture_client_presta ) {

	echo wp_get_attachment_image( $picture_client_presta, $size );

}

?>


