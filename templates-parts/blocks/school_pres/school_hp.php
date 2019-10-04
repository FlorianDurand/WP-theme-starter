<?php

$link = get_field( 'link_school_hp' );
$title = get_field( 'title_school_hp' ) ?: 'Titre de la section...' ;
$desc = get_field( 'description_school_hp' ) ?: 'AgroParisTech est un établissement...' ;

$picture_school_hp = get_field( 'picture_school_hp' );
$size = 'full' ; // (thumbnail, medium, large, full or custom size) ?>


    <h2><?php echo $title ?></h2>
    <p><?php echo $desc ?></p>

<?php
if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
    <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif;
if( $picture_school_hp ) {

	echo wp_get_attachment_image( $picture_school_hp, $size );

}

?>


