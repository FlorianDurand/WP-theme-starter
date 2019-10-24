<?php


$title = get_field( 'title_client_presta' ) ?: 'Titre de la section...' ;
$desc = get_field( 'description_client_presta' ) ?: 'Description...' ;

$picture_client_presta = get_field( 'picture_client_presta' );
$size = 'client_presta' ; // (thumbnail, medium, large, full or custom size) ?>

<div class="client_presta">
    <div class="parallelogram_bg" style="background-color:<?php the_field( 'sub_color_bg', 'option' ); ?>">
        <h2 class="h2"><?php echo $title ?></h2>
        <div class="before" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true"></div>
        <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true"><?php echo $desc ?></p>
        <div class="img">
	        <?php
	        if( $picture_client_presta ) {

		        echo wp_get_attachment_image( $picture_client_presta, $size );

	        }

	        ?>
        </div>
    </div>
</div>




