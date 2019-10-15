<?php


$title = get_field( 'title_quality_presta' ) ?: 'Titre de la section...' ; ?>


<div class="quality_presta">
    <h2 class="h2"><?php echo $title ?></h2>
    <div class="qualities">
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
			    $size = 'quality_presta' ; // (thumbnail, medium, large, full or custom size)
			    ?>
                <div class="quality">
                <div class="header">
	                <?php if( $quality_image ) {

		                echo wp_get_attachment_image( $quality_image, $size );

	                }?>
                    <div class="right">
                        <h3 class="h3"><?php the_sub_field( 'title_quality' ); ?></h3>
                        <?php if( $quality_description ) {

				            echo '<p>' . $quality_description . '</p>';

                         } ?>
                    </div>

                </div>
                <div class="content">
                    <div class="left"><?php echo $quality_block_left ; ?></div>
                    <div class="right"><?php echo $quality_block_right; ?></div>
                </div>
                <div class="additional">
	                <?php
	                // check if the flexible content field has rows of data
	                if ( have_rows( 'quality_flexible_content' ) ):

	                // loop through the rows of data
	                while ( have_rows( 'quality_flexible_content' ) ) : the_row();

	                if ( get_row_layout() == 'column_style' ): ?>
                        <div class="columns">
                <?php   if ( have_rows( 'column_repeater' ) ):

	                // loop through the rows of data
	                        while ( have_rows( 'column_repeater' ) ) : the_row();?>

                                <div class="column">
                                    <h4 class="h4"><?php the_sub_field( 'column_title' ); ?></h4>
                                    <p><?php the_sub_field( 'column_text' );?></p>
                                </div>
                <?php
                            endwhile;
                        endif; ?>
                        </div>
                <?php   elseif ( get_row_layout() == 'picture_style' ): ?>
                            <div class="picture">
	                            <?php    if ( have_rows( 'picture_repeater' ) ):

		                            // loop through the rows of data
		                            while ( have_rows( 'picture_repeater' ) ) : the_row();


			                            $picture_title = get_sub_field( 'picture_title' );
			                            $picture_image = get_sub_field( 'picture_picture' );
			                            $size = 'quality_presta' ; // (thumbnail, medium, large, full or custom size)
			                            if( $picture_image ) {

				                            echo wp_get_attachment_image( $picture_image, $size );

			                            }
			                            echo '<h3 class="h3">' . $picture_title . '</h3>';
		                            endwhile;
	                            endif; ?>
                            </div>
					   <?php endif;
				    endwhile;
			    endif; ?>
                </div>
                </div>
    <?php    endwhile;
	    endif; ?>
    </div>
</div>
