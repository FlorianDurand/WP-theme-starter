<?php
$title = get_field( 'title_clients_hp' ) ?: 'Titre de la section...' ; ?>
<h2><?php echo $title ?></h2>
<?php
$new = array(
	'post_type' => 'client',
);
$the_query = new WP_Query( $new );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
	<?php the_post_thumbnail(); ?><br>
<?php endwhile;?>
<?php endif;
wp_reset_postdata();




