<?php
/* Template Name: Environnement */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
	the_content(); ?>

<?php
endwhile;
endif; get_footer(); ?>
