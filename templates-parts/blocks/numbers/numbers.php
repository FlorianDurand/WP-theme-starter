<?php
$title = get_field( 'title_numbers_hp' ) ?: 'Titre de la section...' ; ?>
 <h2><?php echo $title ?></h2>
<?php
// check if the repeater field has rows of data
if ( have_rows( 'key_repeater' ) ):

	// loop through the rows of data
	while ( have_rows( 'key_repeater' ) ) : the_row();

		// display a sub field value
		the_sub_field( 'number' ); echo ' ';
		the_sub_field( 'description' ); ?>
		<br>

	<?php endwhile;

else :

	// no rows found

endif;



