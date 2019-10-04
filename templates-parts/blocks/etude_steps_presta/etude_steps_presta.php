<?php
$title_etude = get_field( 'title_etude_steps_presta' ) ?: 'Titre de la section...' ;
$intro_etude = get_field( 'intro_etude_steps_presta' ) ?: 'Intro de la section...' ; ?>
 <h2><?php echo $title_etude ?></h2>
 <p><?php echo $intro_etude ?></p>
<?php
// check if the repeater field has rows of data
if ( have_rows( 'etude_steps_repeater' ) ):

	// loop through the rows of data
	while ( have_rows( 'etude_steps_repeater' ) ) : the_row();

		// display a sub field value
		the_sub_field( 'title' ); echo ' ';
		the_sub_field( 'description' ); ?>
		<br>

	<?php endwhile;

else :

	// no rows found

endif;



