<?php
$title = get_field( 'title_numbers_hp' ) ?: 'Titre de la section...' ; ?>
<div class="number_hp">
    <h2 class="h2"><?php echo $title ?></h2>
    <div class="numbers">
        <?php
        // check if the repeater field has rows of data
        if ( have_rows( 'key_repeater' ) ):

            // loop through the rows of data
            while ( have_rows( 'key_repeater' ) ) : the_row(); ?>

                <div class="number">
	                <span><?php the_sub_field( 'number' ); ?></span>
	                <?php the_sub_field( 'description' ); ?>
                </div>
            <?php endwhile;

        else :

            // no rows found

        endif; ?>
    </div>
</div>



