    </div>
    <footer id="footer">
        <div class="contact">
            <h3><?php the_field( 'footer_main_title', 'option' ); ?></h3>
            <a class="mail" href="mailto:<?php the_field( 'mail_ase', 'option' ); ?>"><?php the_field( 'mail_ase', 'option' ); ?></a>
            <a class="phone" href="tel:<?php the_field( 'tel_ase', 'option' ); ?>"><?php the_field( 'tel_ase', 'option' ); ?></a>
            <ul class="social menu">
            <?php
            // check if the repeater field has rows of data
            if ( have_rows( 'social_network', 'option' ) ):

                // loop through the rows of data
                while ( have_rows( 'social_network', 'option' ) ) : the_row();

                    if ( have_rows( 'social_information', 'option' ) ):

                        // loop through the rows of data
                        while ( have_rows( 'social_information', 'option' ) ) : the_row(); ?>

	                        <li>
                                    <a href="<?php the_sub_field( 'social_link', 'option' ); ?>" target="_blank">
                                        <img src="<? the_sub_field( 'social_logo', 'option' );?>" alt="logo social network" />
                                    </a>
                            </li>

                       <?php endwhile;
                    endif;
                endwhile;
            endif;?>
            </ul>
        </div>

	    <?php
        $footer_tree =  get_field( 'tree_logo', 'option' );
        $size = 'full';

        if ( $footer_tree ) {
	        echo wp_get_attachment_image( $footer_tree, $size );
        }

	    ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
	    <?php wp_footer(); ?>
    </footer>
	</body>
</html>
