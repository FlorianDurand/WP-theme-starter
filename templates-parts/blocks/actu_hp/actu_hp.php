<?php
$title = get_field( 'title_actu_hp' ) ?: 'Titre de la section...' ; ?>
<h2><?php echo $title ?></h2>
<?php
$new = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
);
$the_query = new WP_Query( $new );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
	<?php the_title(); ?> <br>
	<?php the_permalink(); ?>
	<?php the_post_thumbnail(); ?>
<?php endwhile;?>
<?php endif;
wp_reset_postdata();




