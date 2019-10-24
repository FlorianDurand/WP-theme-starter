<?php


$title = get_field( 'title_solutions_presta' ) ?: 'Titre de la section...' ; ?>
<div class="solutions_presta">
    <h2 class="h2"><?php echo $title ?></h2>
    <ul class="solutions">
        <?php
        // check if the repeater field has rows of data
        if ( have_rows( 'solutions_repeater' ) ):

            // loop through the rows of data
            while ( have_rows( 'solutions_repeater' ) ) : the_row(); ?>

            <div class="dot" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true">

            </div>
              <li class="solution" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true">
	              <?php the_sub_field( 'solution' );  ?>
              </li>

            <?php endwhile;

        else :

            // no rows found

        endif; ?>
    </ul>
</div>


