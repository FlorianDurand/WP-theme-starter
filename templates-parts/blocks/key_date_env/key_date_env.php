<?php
$title = get_field( 'title_date_env' ) ?: 'Titre de la section...' ; ?>
<div class="key_env">
    <h2 class="h2"><?php echo $title ?></h2>
    <div class="dates">
    <?php
        // check if the repeater field has rows of data
        if ( have_rows( 'key_date_repeater' ) ):

            // loop through the rows of data
            while ( have_rows( 'key_date_repeater' ) ) : the_row(); ?>

                <div class="date">
	                <div class="left"><?php the_sub_field( 'number' ); ?></div>
	                <div class="right"><?php the_sub_field( 'description' ); ?></div>
                </div>

            <?php endwhile;

        else :

            // no rows found

        endif;
    ?>
    </div>
</div>





