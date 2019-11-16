    </div>
    <footer id="footer">
        <div class="contact">
            <h3><?php the_field( 'footer_main_title', 'option' ); ?></h3>
            <div class="mobile-social">
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
	        <?php $link = get_field( 'privacy_link', 'option' ); ?>
	        <?php if( $link ):
		        $link_url = $link['url'];
		        $link_title = $link['title'];
		        $link_target = $link['target'] ? $link['target'] : '_self';
		        ?>
                <a class="privacy_link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
	        <?php endif; ?>
        </div>
        <div class="tree" data-aos="zoom-in-up" data-aos-duration="1000">
<!--        <div class="tree">-->
	        <?php
	        $footer_tree =  get_field( 'tree_logo', 'option' );
	        $size = 'full';
	        if ( $footer_tree ) {
		        echo wp_get_attachment_image( $footer_tree, $size );
	        }
	        ?>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <?php wp_footer(); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie_html.min.js"></script>
    <script>
      var animation = bodymovin.loadAnimation({
        container: document.getElementById('overlay-loader'),
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: '<?php echo get_stylesheet_directory_uri(); ?>/data.json'
      })
    </script>
	</body>
</html>
