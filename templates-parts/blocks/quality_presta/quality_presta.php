<?php


$title = get_field( 'title_quality_presta' ) ?: 'Titre de la section...' ; ?>



    <h2><?php echo $title ?></h2>
<?php
// check if the repeater field has rows of data
if ( have_rows( 'quality_repeater' ) ):

	// loop through the rows of data
	while ( have_rows( 'quality_repeater' ) ) : the_row();?>

		<?php
		$quality_description = get_sub_field( 'quality_description' );
		$quality_image = get_sub_field( 'quality_picture' );
		$quality_block_left = get_sub_field( 'quality_block_left' );
		$quality_block_right = get_sub_field( 'quality_block_right' );
		$size = 'full' ; // (thumbnail, medium, large, full or custom size)
		?>

		<h3><?php the_sub_field( 'title_quality' ); ?></h3>
		<?php if( $quality_image ) {

			echo wp_get_attachment_image( $quality_image, $size );

		}?>
		<?php if( $quality_description ) {

			echo $quality_description;

		}
		echo $quality_block_left . '<br>';
		echo $quality_block_right . '<br>';
		?>


<?php
// check if the flexible content field has rows of data
		if ( have_rows( 'quality_flexible_content' ) ):

			// loop through the rows of data
			while ( have_rows( 'quality_flexible_content' ) ) : the_row();

				if ( get_row_layout() == 'column_style' ):

					if ( have_rows( 'column_repeater' ) ):

					// loop through the rows of data
					while ( have_rows( 'column_repeater' ) ) : the_row();?>

						<h4><?php the_sub_field( 'column_title' ); ?></h4>
						<p><?php the_sub_field( 'column_text' );?></p>

				<?php
					endwhile;
				endif;

				elseif ( get_row_layout() == 'picture_style' ):

					if ( have_rows( 'picture_repeater' ) ):

						// loop through the rows of data
						while ( have_rows( 'picture_repeater' ) ) : the_row();


							$picture_title = get_sub_field( 'picture_title' );
							$picture_image = get_sub_field( 'picture_picture' );
							$size = 'full' ; // (thumbnail, medium, large, full or custom size)
							if( $picture_image ) {

								echo wp_get_attachment_image( $picture_image, $size );

							}
							echo '<h3>' . $picture_title . '</h3>';
						endwhile;
					endif;
				endif;
			endwhile;
		endif;
	endwhile;
endif;
