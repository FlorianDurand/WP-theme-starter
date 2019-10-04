<?php
$title = get_field( 'title_presta_hp' ) ?: 'Titre de la section...' ; ?>
<h2><?php echo $title ?></h2>
<?php
$link = get_field( 'link' );
$new = array(
	'post_type' => 'presta',
	'post_per_page' => 6,
);
$the_query = new WP_Query( $new );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
	<?php the_title(); ?> <br>
	<?php the_excerpt(); ?>
<?php endwhile;?>
<?php endif;
wp_reset_postdata();
if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif; ?>




