<?php
$title = get_field( 'title_date_env' ) ?: 'Titre de la section...' ; ?>
<div class="key_env">
    <h2 class="h2"><?php echo $title ?></h2>
    <div class="dates">
    <?php
        $i = 1;
        // check if the repeater field has rows of data
        if ( have_rows( 'key_date_repeater' ) ):

            // loop through the rows of data
            while ( have_rows( 'key_date_repeater' ) ) : the_row();
                if ( $i == 3 ) {
                    $i = 1;
                }
                $time = 75*$i;
        ?>

                <div class="date" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $time;?>" data-aos-once="true">
	                <div class="left"><?php the_sub_field( 'number' ); ?></div>
	                <div class="right"><?php the_sub_field( 'description' ); ?></div>
                </div>

            <?php
                $i++;
                endwhile;

        else :

            // no rows found

        endif;
    ?>
    </div>
</div>





