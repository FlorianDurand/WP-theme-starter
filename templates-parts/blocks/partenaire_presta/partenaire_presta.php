
<?php $title = get_field( 'title_partenaire_presta' ) ?: 'Titre de la section...' ; ?>
<div class="partenaire_presta">
<h2 class="h2"><?php echo $title ?></h2>
    <div class="swiper-container" id="swiper-container">
        <div class="swiper-wrapper">
<?php
$new = array(
	'post_type' => 'partner',
	'post_per_page' => -1
);
$the_query = new WP_Query( $new );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
        <div class="swiper-slide">
	<?php the_post_thumbnail('presta_presta'); ?>
        </div>
<?php endwhile;?>
<?php endif;
wp_reset_postdata(); ?>
</div>
    </div>



