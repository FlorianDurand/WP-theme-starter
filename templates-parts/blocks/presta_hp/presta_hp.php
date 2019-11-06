<?php
$title = get_field( 'title_presta_hp' ) ?: 'Titre de la section...' ; ?>
<div class="presta_hp">
<div class="parallelogram_bg" style="background-color:<?php the_field( 'color_bg', 'option' ); ?>">
<h2 class="h2"><?php echo $title ?></h2>
    <div class="swiper-container-domain-mobile">
        <div class="domain swiper-wrapper">
<?php
$link = get_field( 'link' );
$number_presta = get_field ( 'number_presta' );
$new = array(
	'post_type' => 'presta',
	'posts_per_page' => $number_presta,
);
$the_query = new WP_Query( $new );

if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
    <div class="single-presta swiper-slide">
		<?php the_post_thumbnail( 'icon_presta' ); ?>
	    <h4 class="h4"><?php the_title(); ?></h4>
	    <?php the_excerpt(); ?>
    </div>
<?php endwhile;?>
<?php endif;
wp_reset_postdata(); ?>
</div>
        <div class="swiper-pagination"></div>
</div>
</div>
<?php if( $link ):
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a class="presta_link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif; ?>

</div>




