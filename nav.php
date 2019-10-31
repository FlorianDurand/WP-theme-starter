<header id="header">
	<div class="nav">
		<div class="left">
			<a href="<?php echo get_home_url(); ?>">
				<?php
				$image = get_field( 'logo_ase', 'option' );
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</a>
		</div>
		<nav class="menu-desktop">
			<ul class="menu">
				<?php wp_nav_menu_no_ul_header(); ?>
			</ul>
		</nav>
        <nav class="menu-mobile" onclick="openMenu()">
                <span></span>
                <span></span>
                <span></span>
        </nav>
	</div>
</header>
<div class="menu-mobile-pop" id="menu-mobile">
    <div class="nav-left" id="close-overlay">
    </div>
    <div class="nav">
        <ul class="menu">
			<?php wp_nav_menu_no_ul_header(); ?>
        </ul>
        <ul class="social">
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
</div>
<div class="overlay" id="overlay">

</div>