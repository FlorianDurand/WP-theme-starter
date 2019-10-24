<?php
$title = get_field( 'title_numbers_hp' ) ?: 'Titre de la section...' ; ?>
<div class="number_hp">
    <h2 class="h2"><?php echo $title ?></h2>
    <div class="numbers">
        <?php
        $i=1;
        // check if the repeater field has rows of data
        if ( have_rows( 'key_repeater' ) ):

            // loop through the rows of data
            while ( have_rows( 'key_repeater' ) ) : the_row(); ?>
                <?php
                $time = 250*$i;
                $time_1 = $time+250;
                ?>
                <div class="number" >
	                <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $time; ?>" data-aos-once="true"><?php the_sub_field( 'number' ); ?></span>
	                <div class="none" data-aos-duration="1000" data-aos="fade-up" data-aos-delay="<?php echo $time_1; ?>" data-aos-once="true"><?php the_sub_field( 'description' ); ?></div>
                </div>
            <?php
            $i++;
            endwhile;

        else :

            // no rows found

        endif; ?>
    </div>
</div>



