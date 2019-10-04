<?php
$new = array(
	'post_type' => 'presta',
	'post_per_page' => -1,
);
$the_query = new WP_Query( $new );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
	<?php the_title(); ?> <br>
	<?php the_content(); ?>
<?php endwhile;?>
<?php endif;
wp_reset_postdata();





