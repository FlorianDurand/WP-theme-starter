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
        <div class="tree">
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
        <script>
          if ( document.getElementsByClassName( "prestas" ).length > 0 ) {
            var i, tabHeight, maxHeight, titlePresta;
            titlePresta = document.getElementsByClassName("single_presta_title");
            for (i = 0; i < titlePresta.length; i++) {
              titlePresta[i].addEventListener("click", showPresta);
            }
            tabHeight = document.getElementsByClassName("single_presta_content");
            maxHeight = 0;
            for (i = 0; i < tabHeight.length; i++) {
              if (maxHeight < tabHeight[i].clientHeight) {
                maxHeight = tabHeight[i].clientHeight
              }
            }
            document.getElementById('prestas_content').style.height = maxHeight + 'px';

            function showPresta () {
              let i;
              for (i = 0; i < titlePresta.length; i++) {
                let current_title = document.getElementsByClassName("title_active");
                let current_content = document.getElementsByClassName("single_presta_content");
                current_title[0].className = current_title[0].className.replace("title_active", "");
                this.className += " title_active";
                const target = this.dataset.parent;
                console.log(current_content[i])
                current_content[i].classList.remove('content_active');
                setTimeout(function () {
                  wait(target);
                }, 400);
              }

              function wait (target) {
                document.getElementById(target).classList.add('content_active');
              }
            }
          }
        </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
	    <?php wp_footer(); ?>
    <script>
      document.getElementById( 'cn-accept-cookie' ).addEventListener( 'click', closeCookie )
      document.getElementById( 'cn-refuse-cookie' ).addEventListener( 'click', closeCookie )
    </script>
	</body>
</html>
