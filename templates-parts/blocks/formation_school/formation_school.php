<?php
$title = get_field( 'title_formation_school' ) ?: 'Titre de la section...' ;
$link = get_field( 'link_formation' );
?>

    <h2><?php echo $title ?></h2>
<?php
// check if the repeater field has rows of data
if ( have_rows( 'formation_repeater' ) ):

	// loop through the rows of data
	while ( have_rows( 'formation_repeater' ) ) : the_row();

		// display a sub field value
		the_sub_field( 'title_formation' ); echo '<br>';
		the_sub_field( 'description_formation' ); ?>
        <br>

	<?php endwhile;

else :

	// no rows found

endif;
if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
    <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif;



