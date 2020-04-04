<?php
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div>404</div>

<?php
endwhile;
endif; get_footer(); ?>
