<?php
get_header(); ?>
<?php
    if ( have_posts() ) : while ( have_posts() ) :
	    the_post();
	    the_date();
        $tags = get_tags();
        foreach ( $tags as $tag ) {
            echo $tag->{'name'} . '<br>';
        }
        the_title();
        the_content();
			?>
<?php
	endwhile;
endif;


	the_field( 'title_lasts_actu', 'option' );
	$number = the_field( 'number_of_article_lasts_actu', 'option' );
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
