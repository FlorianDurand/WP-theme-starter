<?php


$left_block_env = get_field( 'left_block_env' ) ?: 'Block de texte de gauche....' ;
$right_block_env = get_field( 'right_block_env' ) ?: 'Block de texte de droite....' ;
$signature_env = get_field( 'signature_env' ) ?: 'Signature du président....' ;
$president_image = get_field( 'president_img' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size)

?>


	<p><?php echo $left_block_env ?></p>
	<p><?php echo $right_block_env ?></p>
	<p><?php echo $signature_env ?></p>

<?php if( $president_image ) {

echo wp_get_attachment_image( $president_image, $size );

}
