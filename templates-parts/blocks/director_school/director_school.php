<?php


$title_director = get_field( 'title_director_school' ) ?: 'Titre de la page...' ;
$director_speech = get_field( 'director_school' ) ?: 'Mots du directeur...' ;
$director_image = get_field( 'director_img' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size)
$link = get_field( 'link_director' );

?>

	<h2><?php echo $title_director ?></h2>
	<p><?php echo $director_speech ?></p>

<?php if( $director_image ) {

	echo wp_get_attachment_image( $director_image, $size );

}
if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
    <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif;