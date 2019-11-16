<?php
get_header(); ?>
<div id="overlay-loader">

</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
	the_content(); ?>

<?php
endwhile;
endif; get_footer(); ?>
