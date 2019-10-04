<?php
$title_rse = get_field( 'title_rse_env' ) ?: 'Titre de la section...' ;
$intro_left_rse = get_field( 'intro_left_rse_env' ) ?: 'Intro de la section... (block gauche)' ;
$intro_right_rse = get_field( 'intro_right_rse_env' ) ?: 'Intro de la section... (block droit)' ;
?>
 <h2><?php echo $title_rse ?></h2>
 <p><?php echo $intro_left_rse ?></p>
 <p><?php echo $intro_right_rse ?></p>
<?php
// check if the repeater field has rows of data
if ( have_rows( 'rse_repeater' ) ):

	// loop through the rows of data
	while ( have_rows( 'rse_repeater' ) ) : the_row();

		// display a sub field value
        $picto = get_sub_field( 'picto_rse' );
		$size = 'full'; // (thumbnail, medium, large, full or custom size)

		if( $picto ) {

			echo wp_get_attachment_image( $picto, $size );

		}
        echo '<br>';
		the_sub_field( 'title' ); echo '<br> ';
		the_sub_field( 'description' ); ?>
		<br>

	<?php endwhile;

else :

	// no rows found

endif;



