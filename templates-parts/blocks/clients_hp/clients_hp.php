<?php
$title = get_field( 'title_clients_hp' ) ?: 'Titre de la section...' ; ?>
<div class="clients_hp">
<h2 class="h2"><?php echo $title ?></h2>
    <div class="swiper-container" id="swiper-container">
        <div class="swiper-wrapper">
<?php
$new = array(
	'post_type' => 'client',
	'post_per_page' => -1
);
$the_query = new WP_Query( $new );
if($the_query -> have_posts()): ?>
<?php while($the_query -> have_posts()): ?>
<?php $the_query -> the_post(); ?>
        <div class="swiper-slide">
	<?php the_post_thumbnail(); ?>
        </div>
<?php endwhile;?>
<?php endif;
wp_reset_postdata(); ?>
</div>
    </div>




