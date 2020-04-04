<?php //exemple of single.php file
get_header(); ?>
<div class="single-article">
	<?php
	if ( have_posts() ) : while ( have_posts() ) :
        the_post(); ?>
        <div class="first">
            <div class="top">
                <?php $date = get_the_date( 'd/m/y' ); ?>
                <time datetime="<?php the_date( 'd-m-y'); ?>" class="date"><?php echo $date ?></time>
                <div class="tags">
	                <?php $post_id[] = get_the_ID() ?>
                   <?php $tags = get_the_tags($post_id[0]);
                    if ($tags) {
                    foreach ( $tags as $tag ) { ?>
                    <?php echo $tag->{'name'}; ?>
                    <?php }
                        }
                    ?>
                </div>
            </div>

            <h1 class="h2"><?php the_title(); ?></h1>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>

	<?php
	    endwhile;
	endif;
	?>
    <div class="actus_actus article">
        <h2 class="h2"><?php the_field( 'title_lasts_actu', 'option' ); ?></h2>
        <div class="news swiper-container-actu">
            <div class="swiper-wrapper">
			<?php
            $ignored = get_option( 'sticky_posts' );
            array_push($ignored, $post_id[0]);
			$number = get_field( 'number_of_article_lasts_actu', 'option' );
			$new = array(
				'post_type' => 'post',
				'posts_per_page' => $number,
				'post__not_in' => $ignored
			);
			$the_query = new WP_Query( $new );
			if($the_query -> have_posts()): ?>
				<?php while($the_query -> have_posts()): ?>
					<?php $the_query -> the_post(); ?>
                    <div class="single-news swiper-slide">
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
</div>



<?php get_footer(); ?>
