<?php
$title = get_field( 'title_ranking_school' ) ?: 'Titre de la section...' ;
$sub_title = get_field( 'sub_title_ranking_school' ) ?: 'Sous-Titre de la section...' ; ?>
 <h2><?php echo $title ?></h2>
 <h3><?php echo $sub_title ?></h3>
<?php
// check if the repeater field has rows of data
if ( have_rows( 'ranking_repeater' ) ):

	// loop through the rows of data
	while ( have_rows( 'ranking_repeater' ) ) : the_row();

		// display a sub field value
		the_sub_field( 'ranking_number' ); echo ' ';
		the_sub_field( 'ranking_description' ); ?>
		<br>

	<?php endwhile;

else :

	// no rows found

endif;



