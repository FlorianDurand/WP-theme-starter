<?php
get_header(); ?>
<div class="single-article">
	<?php
	if ( have_posts() ) : while ( have_posts() ) :
        the_post(); ?>
        <div class="first">
            <div class="top">
                <div class="date"><?php the_date( 'd/m/y'); ?></div>

                <div class="tags">
		            <?php $tags = get_tags();
		            foreach ( $tags as $tag ) {
			            echo $tag->{'name'} . ' ';
		            } ?>
                </div>
            </div>

            <h2 class="h2"><?php the_title(); ?></h2>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>

	<?php
	    endwhile;
	endif;
	?>
    <div class="actus_actus">
        <h2 class="h2"><?php the_field( 'title_lasts_actu', 'option' ); ?></h2>
        <div class="news">
			<?php
			$number = get_field( 'number_of_article_lasts_actu', 'option' );
			$new = array(
				'post_type' => 'post',
				'posts_per_page' => $number,
			);
			$the_query = new WP_Query( $new );
			if($the_query -> have_posts()): ?>
				<?php while($the_query -> have_posts()): ?>
					<?php $the_query -> the_post(); ?>
                    <div class="single-news">
						<?php the_post_thumbnail( 'large' ); ?>
                        <div class="box">
                            <h5 class="actus_title"><?php the_title(); ?></h5>
                            <a href="<?php the_permalink(); ?>">Lire l'article</a>
                        </div>
                    </div>
				<?php endwhile;?>
			<?php endif;
			wp_reset_postdata();?>
        </div>
    </div>
</div>



<?php get_footer(); ?>
