<?php

$link = get_field( 'link_school_hp' );
$title = get_field( 'title_school_hp' ) ?: 'Titre de la section...' ;
$desc = get_field( 'description_school_hp' ) ?: 'AgroParisTech est un établissement...' ;

$picture_school_hp = get_field( 'picture_school_hp' );
$size = 'school_hp' ; // (thumbnail, medium, large, full or custom size) ?>

<div class="school_hp">
    <div class="left">
        <h2 class="h2"><?php echo $title ?></h2>
        <p><?php echo $desc ?></p>
<?php
if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
    <a class="school_link button-style" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif; ?>
    </div>
<?php if( $picture_school_hp ) {

	echo wp_get_attachment_image( $picture_school_hp, $size );

}

?>
</div>


