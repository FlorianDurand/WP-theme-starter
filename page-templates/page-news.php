<?php /* Template Name: Actualités */
get_header(); ?>
<?php
$article = array(
	'post_type' => 'post',
	'posts_per_page' => 1
);
$the_query = new WP_Query( $article );
if($the_query -> have_posts()): ?>
	<?php
	while($the_query -> have_posts()): ?>
		<?php
		$the_query -> the_post(); ?>
			<?php
			$tags = get_tags();
			foreach ( $tags as $tag ) {
				echo $tag->{'name'} . '<br>';
			}
			the_title();
			the_permalink();
			the_post_thumbnail( 'medium' );
			?>
<?php
	endwhile;
endif;
wp_reset_postdata();

	the_field( 'title_actu' );
	$number = get_field( 'number_of_article' );
	$new = array(
		'post_type' => 'post',
		'posts_per_page' => $number,
	);
	$the_query = new WP_Query( $new );
	if($the_query -> have_posts()): ?>
	<?php while($the_query -> have_posts()): ?>
		<?php $the_query -> the_post(); ?>
		<?php the_title(); ?> <br>
		<?php the_permalink(); ?>
		<?php the_post_thumbnail( 'medium' ); ?>
	<?php endwhile;?>
<?php
	endif;
	wp_reset_postdata();


get_footer(); ?>
