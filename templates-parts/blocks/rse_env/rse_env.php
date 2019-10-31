<?php
$title_rse = get_field( 'title_rse_env' ) ?: 'Titre de la section...' ;
$intro_left_rse = get_field( 'intro_left_rse_env' ) ?: 'Intro de la section... (block gauche)' ;
$intro_right_rse = get_field( 'intro_right_rse_env' ) ?: 'Intro de la section... (block droit)' ;
?>
<div class="rse_env">
    <h2 class="h2"><?php echo $title_rse ?></h2>
    <div class="intro">
        <p class="left_block"><?php echo $intro_left_rse ?></p>
        <p class="right_block"><?php echo $intro_right_rse ?></p>
    </div>
    <div class="swiper-container-domain-mobile">
    <div class="rse swiper-wrapper">
	    <?php
	    // check if the repeater field has rows of data
	    if ( have_rows( 'rse_repeater' ) ):

		    // loop through the rows of data
		    while ( have_rows( 'rse_repeater' ) ) : the_row(); ?>

			  <div class="single-rse swiper-slide">
				  <?  $picto = get_sub_field( 'picto_rse' );
				  $size = 'full'; // (thumbnail, medium, large, full or custom size)

				  if( $picto ) {

					  echo wp_get_attachment_image( $picto, $size );

				  } ?>

				  <h5><?php the_sub_field( 'title' ); ?></h5>
				  <p><?php the_sub_field( 'description' ); ?></p>
              </div>
		    <?php endwhile;

	    else :

		    // no rows found

	    endif; ?>
    </div>
        <div class="swiper-pagination"></div>
    </div>

</div>



