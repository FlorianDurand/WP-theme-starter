<?php


$left_block_env = get_field( 'left_block_env' ) ?: 'Block de texte de gauche....' ;
$right_block_env = get_field( 'right_block_env' ) ?: 'Block de texte de droite....' ;
$signature_env = get_field( 'signature_env' ) ?: 'Signature du président....' ;
$president_image = get_field( 'president_img' );
$size = 'president_env' ; // (thumbnail, medium, large, full or custom size)

?>
<div class="president_env">
    <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
        <div class="row">
            <p class="left_block"><?php echo $left_block_env ?></p>
            <div class="right">
                <p class="right_block"><?php echo $right_block_env ?></p>
                <p class="signature"><?php echo $signature_env ?></p>
            </div>
        </div>

    </div>
	<?php if( $president_image ) {

		echo wp_get_attachment_image( $president_image, $size );

	} ?>
</div>




