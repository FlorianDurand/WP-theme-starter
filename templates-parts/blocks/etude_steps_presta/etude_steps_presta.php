<?php
$title_etude = get_field( 'title_etude_steps_presta' ) ?: 'Titre de la section...' ;
$intro_etude = get_field( 'intro_etude_steps_presta' ) ?: 'Intro de la section...' ; ?>
<div class="etude_steps">
    <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
         <h2 class="h2"><?php echo $title_etude ?></h2>
         <p><?php echo $intro_etude ?></p>
        <div class="steps">
	        <?php
	        // check if the repeater field has rows of data
	        if ( have_rows( 'etude_steps_repeater' ) ):

		        // loop through the rows of data
		        while ( have_rows( 'etude_steps_repeater' ) ) : the_row(); ?>

			        <div class="step">
				        <div class="left"><?php the_sub_field( 'title' );?></div>
				        <div class="right"><?php the_sub_field( 'description' ); ?></div>
                    </div>

		        <?php endwhile;

	        else :

		        // no rows found

	        endif; ?>
        </div>

    </div>
</div>



