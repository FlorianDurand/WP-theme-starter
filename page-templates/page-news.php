<?php /* Template Name: Actualités */
get_header(); ?>
<div class="last_actu first-element">
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
            <?php $post_id[] = get_the_ID() ?>
        <div class="left">
            <ul>
	        <?php
	        $tags = get_tags();
	        foreach ( $tags as $tag ) { ?>
		        <li><?php echo $tag->{'name'}; ?></li>
	     <?php } ?>
            </ul>
	        <h2 class="h2"><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>">Lire l'article</a>
        </div>

			<?php the_post_thumbnail( 'last_actu' ); ?>
		<?php
		endwhile;
	endif;
	wp_reset_postdata(); ?>
</div>

<div class="actus_actus">
    <h2 class="h2"><?php the_field( 'title_lasts_actu', 'option' ); ?></h2>
    <div class="news swiper-container-actus" >
        <div class="swiper-wrapper">
		<?php
		$number = get_field( 'number_of_article_lasts_actu', 'option' );
		$new = array(
			'post_type' => 'post',
			'posts_per_page' => $number,
			'post__not_in' => $post_id
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
        <div class="swiper-scrollbar">
            <div class="swiper-scrollbar-drag">

            </div>
        </div>
    </div>
</div>



	<div class="twitter_actus">
        <div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
            <h2 class="h2"> <?php the_field( 'title_twitter_actus' );?> </h2>
            <div class="twitter">
	            <?php the_content(); ?>
            </div>
        </div>
	        <?php
	        $link = get_field( 'link_twitter' );
            if( $link ):
		        $link_url = $link['url'];
		        $link_title = $link['title'];
		        $link_target = $link['target'] ? $link['target'] : '_self';
		        ?>
                <a class="twitter_link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
	        <?php endif; ?>
    </div>

<?php get_footer(); ?>
