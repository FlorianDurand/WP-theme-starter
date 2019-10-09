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
	</div>
</header>