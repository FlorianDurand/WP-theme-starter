<?php
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="single-article">
		<div class="first">
			<div class="top">
				<div class="date"><?php the_date( 'd/m/y'); ?></div>
			</div>

			<h1 class="h2"><?php the_title(); ?></h1>
		</div>
		<div class="content">
			<?php the_content(); ?>
		</div>

<?php
endwhile;
endif; get_footer(); ?>
